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

</head>

<body id="body" style="background:white ; color=#191A19; min-width:320px;">

  <!-- TODO: Inclure le nav ici -->
  <?php include "commons/nav.php"?>

  <!-- Inclusion du module à afficher -->
  <?php include "modules/" . $params["module"]; ?>

  <!-- TODO: Inclure le footer ici -->
    <?php include "commons/footer.php"?>

    <?php include "./public/scripts/dark_mode.js"?>
</body>

</html>

<?php
  }
}
?>