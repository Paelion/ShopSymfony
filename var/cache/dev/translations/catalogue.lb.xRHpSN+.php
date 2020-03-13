<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lb', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Dës Feldergrupp sollt keng zousätzlech Felder enthalen.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'De geschécktene Fichier ass ze grouss. Versicht wann ech gelift ee méi klenge Fichier eropzelueden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Den CSRF-Token ass ongëlteg. Versicht wann ech gelift de Formulaire nach eng Kéier ze schécken.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
