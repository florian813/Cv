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

<style>
  * {
  box-sizing: border-box;
}


.radialProgressBar {
  border-radius: 50%;
  width: 100px;
  height: 100px;
  display: flex;
  background: #ddd;
  margin: 20px;

}
.radialProgressBar .overlay {
  border-radius: 50%;
  width: 80px;
  height: 80px;
  margin: auto;
  background: #191A19;
  text-align: center;
  padding-top: 20%;
}

.progress-0 {
  background-image: -webkit-linear-gradient(left, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%), linear-gradient(90deg, #028cd5 50%, #ddd 50%);
}

.progress-10 {
  background-image: -webkit-linear-gradient(36deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(54deg, #ddd 50%, transparent 50%), linear-gradient(90deg, #028cd5 50%, #ddd 50%);
}

.progress-20 {
  background-image: -webkit-linear-gradient(72deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(-18deg, #ddd 50%, transparent 50%), linear-gradient(-90deg, #028cd5 50%, #ddd 50%);
}

.progress-25 {
  background-image: -webkit-linear-gradient(72deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(0deg, #ddd 50%, transparent 50%), linear-gradient(-90deg, #028cd5 50%, #ddd 50%);
}

.progress-30 {
  background-image: -webkit-linear-gradient(108deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(18deg, #ddd 50%, transparent 50%), linear-gradient(-90deg, #028cd5 50%, #ddd 50%);
}

.progress-40 {
  background-image: -webkit-linear-gradient(144deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(54deg, #ddd 50%, transparent 50%), linear-gradient(-90deg, #028cd5 50%, #ddd 50%);
}

.progress-50 {
  background-image: -webkit-linear-gradient(right, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%), linear-gradient(-90deg, #028cd5 50%, #ddd 50%);
}

.progress-60 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(36deg, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(-90deg, #028cd5 50%, transparent 50%), linear-gradient(-54deg, #028cd5 50%, #ddd 50%);
}

.progress-70 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(72deg, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(-90deg, #028cd5 50%, transparent 50%), linear-gradient(-18deg, #028cd5 50%, #ddd 50%);
}

.progress-80 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(108deg, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #028cd5 50%, transparent 50%), linear-gradient(-18deg, #028cd5 50%, #ddd 50%);
}

.progress-90 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(144deg, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #028cd5 50%, transparent 50%), linear-gradient(-54deg, #028cd5 50%, #ddd 50%);
}

.progress-100 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(right, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #028cd5 50%, transparent 50%), linear-gradient(-90deg, #028cd5 50%, #ddd 50%);
}
</style>
</head>

<body id="body" style="background:#191A19 ; color:white; min-width:320px;">
 
  <!-- TODO: Inclure le nav ici -->
  <?php include "commons/nav.php"?>

  <!-- Inclusion du module à afficher -->
  <?php include "modules/" . $params["module"]; ?>

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
