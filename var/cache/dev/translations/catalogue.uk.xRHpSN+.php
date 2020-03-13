<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ця форма не повинна містити додаткових полів.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Завантажений файл занадто великий. Будь-ласка, спробуйте завантажити файл меншого розміру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значення недопустиме. Будь-ласка, спробуйте відправити форму знову.',
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
