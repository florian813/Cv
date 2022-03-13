<?php

namespace controller;

class IndexController {

  public function index(): void
  {
    // Variables à transmettre à la vue
    $params = [
      "title"  => "CV Florian",
      "module" => "cv.php"
    ];

    // Faire le rendu de la vue "src/view/Template.php"
    \view\Template::render($params);
  }

}
