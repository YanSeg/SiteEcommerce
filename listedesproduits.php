<?php
require_once  "template/header.php";
require_once  "my-functions.php";
require_once "lesproduits.php";
require_once "class/item.php";
require_once "class/catalog.php";


// $produitChien = new Item (1, 'chien', 30000, 'http://localhost/SiteECommerce/image/dog.png',10,10, true);
// displayItem($produitChien);



$catalog = new Catalogue (getProducts());
$catalog ->display();



include "template/footer.php";

?>