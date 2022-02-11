<?php
  require_once 'user.php';
  require 'languages/language.php';
  $language ='fr';

  $user = getUser();
  loadLanguage($user['language']);
  $name = $user['name'];
  $sports = getUserSports($user);
  
  include 'template.php';
