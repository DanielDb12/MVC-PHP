<?php



class App {

  private $controller = 'Home';
  private $method ='index';

  private function splitURL()
  {
    //GET TOMA los datos de la url como un string localhost/public/?name=Daniel $_GET['name'] funciona como una variable
    //Explode divide los links en partes localhost/public/products/product1 a[0]=> products a[1]=> product1
  $URL = $_GET['url'] ?? 'home';
  $URL = explode("/", $URL);
  return $URL;

  }


  public function LoadController(){

    $URL = $this->splitURL();

    $filename = "../app/controller/" . ucfirst($URL[0]) .".php";

    if (file_exists($filename)) {

      require $filename;
      $this->controller = ucfirst($URL[0]);
      unset($URL[0]);

    } else {


      $filename = "../app/controller/_404.php";
      require $filename;
      $this->controller = "_404";
    }

    $controller = new $this->controller;

    if (!empty($URL[1])) {

      if (method_exists($controller, $URL[1])) {

        $this->method = $URL[1];
        unset($URL[1]);
      }
    }

    call_user_func_array([$controller,$this->method], $URL);



}



}


