<?php
require_once  "template/header.php";
require_once  "my-functions.php";
require_once "lesproduits.php";
require_once "class/item.php";
require_once "class/catalog.php";
require_once "class/classcustomers.php";

// Une fonction qui ajoute des clients.

// function adCustomers()
// {
//   $sqlquery_products = "INSERT INTO customers (first_name, last_name, email) VALUES ('FX', 'sansMS', 'fx@gmail.com')";
//   $db = new db();
//   $items = $db->GetTableBdd($sqlquery_products);
//   return $items;
// }
// adCustomers();



$customers = new Customers (getCustomers());
// var_dump($customers);

displayCustomers($customers);

// displayCustomers( $customers);



// displayCustomer($customers);

include "template/footer.php";

?>