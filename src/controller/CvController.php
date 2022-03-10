<?php


namespace controller;


class CvController
{
 public function cv():void {
     // Variables à transmettre à la vue
     $params = [
         "title"  => "cv",
         "module" => "../../view/modules/cv.php"
     ];

     // Faire le rendu de la vue "src/view/Template.php"
     \view\Template::render($params);
 }
}