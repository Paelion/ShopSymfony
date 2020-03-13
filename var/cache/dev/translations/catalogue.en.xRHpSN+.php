<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'message' => 
  array (
    'Panier' => 'Cart',
    'Produit' => 'Product',
  ),
));


return $catalogue;
