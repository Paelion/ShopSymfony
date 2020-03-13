<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sk', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Polia by nemali obsahovať ďalšie prvky.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Odoslaný súbor je príliš veľký. Prosím odošlite súbor s menšou veľkosťou.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token je neplatný. Prosím skúste znovu odoslať formulár.',
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
