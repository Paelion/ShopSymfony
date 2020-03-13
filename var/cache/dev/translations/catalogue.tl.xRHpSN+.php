<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tl', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.',
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
