<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('el', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Αυτή η φόρμα δεν πρέπει να περιέχει επιπλέον πεδία.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Το αρχείο είναι πολύ μεγάλο. Παρακαλούμε προσπαθήστε να ανεβάσετε ένα μικρότερο αρχείο.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Το CSRF token δεν είναι έγκυρο. Παρακαλούμε δοκιμάστε να υποβάλετε τη φόρμα ξανά.',
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
