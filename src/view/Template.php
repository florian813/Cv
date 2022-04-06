<?php

namespace view;

class Template {
  static function render($params) {
?>

<!DOCTYPE html>
<html>

<head>

  <!-- Inclusion des méta-données -->
  <?php include "commons/head.php" ?>
  
  <!--Compteur de visite -->
  <?php
    if(file_exists('compteur_pages_vues.txt'))
    {
        $compteur_f = fopen('compteur_pages_vues.txt', 'r+');
        $compte = fgets($compteur_f);
    }
    else
    {
        $compteur_f = fopen('compteur_pages_vues.txt', 'a+');
        $compte = 0;
    }
    $compte++;
    fseek($compteur_f, 0);
    fputs($compteur_f, $compte);
    fclose($compteur_f); 
    echo "<script>console.log('Nombre de visites : " . $compte . "' );</script>";
?>

</head>

<body id="body" style="background:#191A19 ; color:white; min-width:320px;">
  <!-- TODO: Inclure le nav ici -->
  <?php include "commons/nav.php"?>

  <div >
  <!-- Inclusion du module à afficher -->
  <?php include "modules/" . $params["module"]; ?>
</div>

  <!-- TODO: Inclure le footer ici -->
    <?php include "commons/footer.php"?>

    <?php include "./public/scripts/dark_mode.js"?>
    <?php include "./public/scripts/photo_cv.js"?>
</body>

</html>

<?php
  }
}
?>
