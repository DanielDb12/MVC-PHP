<?php 


class Database {


  private function connect(){


    $db = 'mysql:host='.DBHOST.';dbname='.DBNAME;
    $con = new PDO($db,DBUSER,DBPASS);
    return $con;

  }

  public function query($query, $data = [] ){

    $con = $this->connect();
    $stm = $con->prepare($query);
    $check = $stm->execute($data);

    if ($check) {

      $result = $stm->fetchAll(PDO::FETCH_OBJ); 
    
        if (is_array($result) && count($result)) {
              
          return $result;
      
        }

    }

    return false;

  }

}




?>
