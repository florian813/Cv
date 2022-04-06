<?php

namespace model;

class Model {

  static function connect()
  {
    $dsn = "mysql:host=sql4.freesqldatabase.com;dbname=sql4409148;charset=UTF8";
    $user = "sql4409148";
    $pass = "qNW3vmY73v";
    return new \PDO($dsn, $user, $pass);
  }

}