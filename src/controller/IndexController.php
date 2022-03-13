<?php

namespace controller;

class IndexController {

  public function index(): void
  {
    // Variables à transmettre à la vue
    $params = [
      "title"  => "Cv",
      "module" => "cv.php"
    ];

    // Faire le rendu de la vue "src/view/Template.php"
    \view\Template::render($params);
  }

}
