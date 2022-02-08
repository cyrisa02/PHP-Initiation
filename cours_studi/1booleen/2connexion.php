<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      $userName = 'John'; // Le nom de l'utilisateur
      $newMessages = [
        'RDV 12h', 
        'Projet X', 
        'MAJ Document',
      ]; // La liste des messages non lus 

      echo '<h1>Hello ' . $userName . ' !</h1>'; // On affiche "Hello" suivi du nom de l'utilisateur
      echo '<p>Vous avez <strong>' . count($newMessages) . ' nouveaux</strong> messages . </p>'; // On utilise PHP pour compter le nombre de messages de notre liste de messages

      echo '<ul>';
      foreach($newMessages as $id => $message) {
        echo '<li><a href="/readMessage/' . $id . '">' . $message . '</a></li>'; // On affiche une liste de messages
      }
      echo '</ul>';
    ?>
  </body>
</html>