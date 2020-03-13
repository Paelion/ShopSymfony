<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pl', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ten formularz nie powinien zawierać dodatkowych pól.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Wgrany plik był za duży. Proszę spróbować wgrać mniejszy plik.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token CSRF jest nieprawidłowy. Proszę spróbować wysłać formularz ponownie.',
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
