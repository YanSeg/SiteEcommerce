<?php


$sqlquery_products = "SELECT * FROM products";
$sqlquery_transporters = "SELECT * FROM transporters";



class db  extends PDO {
 
  // public string $sqlquery;
  public $db;

  public function __construct()
  {
    $this->getPDO();
  }

  private function getPDO()
  { 
    try {
      $this->db = new PDO('mysql:host=localhost;dbname=bddecommerce;charset=utf8', 'MAESTRO', 'MAESTRO//1234');
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }


  public function GetTableBdd($sqlquery)
  {
    $fonct = $this->db->prepare($sqlquery);
    $fonct->execute();
    $fonct = $fonct->fetchAll(PDO::FETCH_ASSOC);
    return $fonct;
  }
}








// $db = new db ('bddecommerce');
// $produits =$db->GetTableBdd($sqlquery_products);
// var_dump($produits);

// public function __construct() {
    
//   $this->items = $this->fetchItemsFromDatabase();
// }







// class db  extends PDO {
 
//   // public string $sqlquery;
//   public $db;
//   public string $dbname;

//   public function __construct($dbname)
//   {
//     $this->dbname=$dbname;
//     $this->getPDO();
//   }


//   private function getPDO()
//   { 
//     try {
//       $this->db = new PDO('mysql:host=localhost;dbname='.$this->dbname.';charset=utf8', 'MAESTRO', 'MAESTRO//1234');
//     } catch (Exception $e) {
//       die('Erreur : ' . $e->getMessage());
//     }
//   }


//   public function GetTableBdd($sqlquery)
//   {
//     $fonct = $this->db->prepare($sqlquery);
//     $fonct->execute();
//     $fonct = $fonct->fetchAll(PDO::FETCH_ASSOC);
//     return $fonct;
//   }
// }



?>