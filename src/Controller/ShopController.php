<?php

namespace App\Controller;

use App\Entity\panier;
use App\Entity\produit;
use App\Form\PanierType;
use App\Form\ProduitType;
use App\Form\QuantiteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, EntityManagerInterface $entityManager)
    {
        $panier = new Panier();



            $entityManager->persist($panier);
            $entityManager->flush();



        return $this->render('Shop/index.html.twig', [

            'panier' => $panier
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

        $panier = $this->getDoctrine()
            ->getRepository(Panier::class)
            ->findAll();

        $form = $this->createForm(PanierType::class, $produitRepository);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $produit = $form->getData();

            /*
            $panier = $this->getDoctrine()
                ->getRepository(Panier::class)
                ->find($request->request->get('produit'));
            $produit->setMatiereId($panier);
            */

            $entityManager->persist($produit);
            $entityManager->flush();
        }


        return $this->render('Shop/produitSingle.html.twig', [
            'produits' => $produitRepository,
            'formPanier' => $form->createView(),
            'panier' => $panier

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
}
