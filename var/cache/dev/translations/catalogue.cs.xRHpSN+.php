<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cs', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Tato skupina polí nesmí obsahovat další pole.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Nahraný soubor je příliš velký. Nahrajte prosím menší soubor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token je neplatný. Zkuste prosím znovu odeslat formulář.',
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
