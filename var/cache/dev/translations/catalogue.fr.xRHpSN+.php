<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'messages' => 
  array (
    'Panier' => 'Cart',
    'Produit' => 'Product',
    'Produits' => 'Products',
    'Quantité' => 'Quantity',
    'Montant' => 'Total',
    'Suprimer' => 'Delete',
    'Supprimer ce produit' => 'Delete this product',
    'Vous avez' => 'You\'ve got',
    'article(s) dans votre panier' => 'article(s) in your cart',
    'Il n\'y a pas de produits' => 'There is no products',
    'Prix' => 'Price',
    'Ajouter un produit' => 'Add product',
    'Ajouter' => 'Add',
    'Choisir' => 'Choose',
    'Ajouter au panier' => 'Add to cart',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
