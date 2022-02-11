<div>
  <h3><?php echo $title; ?></h3>
  <div>Temps de préparation : <?php echo $preparationTime; ?> minutes</div>
  <div>
    Difficulté : <?php
      for ($starNumber = 0; $starNumber < $difficulty; $starNumber++) {
        echo '*';
      }
    ?>
  </div>
</div>