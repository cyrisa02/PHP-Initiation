<?php
function loadLanguage(string $language)
{
  if ($language == 'fr') {
    require('languages/language_fr.php');
  } else {
    require('languages/language_en.php');
  }
}