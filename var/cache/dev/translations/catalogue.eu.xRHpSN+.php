<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eu', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Formulario honek ez luke aparteko eremurik eduki behar.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Igotako fitxategia handiegia da. Mesedez saiatu fitxategi txikiago bat igotzen.',
    'The CSRF token is invalid.' => 'CSRF tokena ez da egokia.',
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
