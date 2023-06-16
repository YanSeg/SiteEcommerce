<?php
require_once  "template/header.php";
require_once  "my-functions.php";
require_once "lesproduits.php";
require_once "class/item.php";
require_once "class/catalog.php";


// $produitChien = new Item (1, 'chien', 30000, 'http://localhost/SiteECommerce/image/dog.png',10,10, true);
// displayItem($produitChien);


// Pour afficher les items de mon catalogue quand dispkayCatalogue n'est pas une méthode mais une fonction.

// $catalog = new Catalogue (getProducts());
// $catalog->displayCatalogue($catalog);

$catalog = new Catalogue(getProducts());
displayCatalogue($catalog);

include "template/footer.php";

?>