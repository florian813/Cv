<?php

namespace controller;

class IndexController {

  public function index(): void
  {
    // Variables à transmettre à la vue
    if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
      if ((substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)) == "fr"){
         $params = [
          "title"  => "CV Florian",
          "module" => "cv.php"
          ];
      }
  }
   

    // Faire le rendu de la vue "src/view/Template.php"
    \view\Template::render($params);
  }

}
