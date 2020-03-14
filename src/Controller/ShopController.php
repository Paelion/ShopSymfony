<?php

namespace App\Controller;

use App\Entity\panier;
use App\Entity\produit;
use App\Form\PanierType;
use App\Form\ProduitType;
use PhpParser\Node\Scalar\MagicConst\File;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        $produit = $this->getDoctrine()
            ->getRepository(panier::class)
            ->findAll();


        return $this->render('Shop/index.html.twig', [
            'produits' => $produit
        ]);


    }

    /**
     * @Route("/produits", name="produits")
     */
    public function produits(Request $request, EntityManagerInterface $entityManager)
    {
        $produit = new Produit();

        $produitRepository = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();



        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $produit = $form->getData();

            $photo = $produit->getPhoto();
            $photoName = md5(uniqid()).'.'.$photo->guessExtension();
            $photo->move($this->getParameter('upload_files') ,
                $photoName);
            $produit->setPhoto($photoName);



            $entityManager->persist($produit);
            $entityManager->flush();
        }

        return $this->render('Shop/produits.html.twig', [
            'produits' => $produitRepository,
            'formProduit' => $form->createView()
        ]);

    }

    /**
     * @Route("/Shop/produitSingle/{{id}}", name="produitSingle")
     */
    public function produitSingle( $id, Request $request, EntityManagerInterface $entityManager)
    {

        $produitRepository = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->find($id);

        $panier = new panier();

        $panierRepository = $this->getDoctrine()
            ->getRepository(panier::class)
            ->findAll();

        $produitList = $this->getDoctrine()
            ->getRepository(produit::class)
            ->findAll();


        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $panier = $form->getData();

            $produits = $this->getDoctrine()
                ->getRepository(produit::class)
                ->find($request->request->get('produitId'));
            $panier->setProduitId($produits);

            $entityManager->persist($panier);
            $entityManager->flush();
        }



        return $this->render('Shop/produitSingle.html.twig', [
            'produits' => $produitRepository,
            'paniers' => $panierRepository,
            'formPanier' => $form->createView(),
            'lists' => $produitList

        ]);

    }

    /**
     * @Route("/Shop/remove/{id}", name="remove")
     */
    public function removeShop($id, EntityManagerInterface $entityManager){
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);

        $entityManager->remove($produit);
        $entityManager->flush();

        return $this->redirectToRoute('produits');
    }

    /**
     * @Route("/Shop/remove/{id}", name="removePanier")
     */
    public function removePanier($id, EntityManagerInterface $entityManager){
        $produit = $this->getDoctrine()->getRepository(panier::class)->find($id);

        $entityManager->remove($produit);
        $entityManager->flush();

        return $this->redirectToRoute('index');
    }

}
