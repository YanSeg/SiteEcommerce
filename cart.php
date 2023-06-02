<?php

include  "template/header.php";
include  "my-functions.php";
include "lesproduits.php";

$quantite = $_POST['quantite'];  //$_POST ,ou get, est une variable globale qui permet de recupérer tout ce qui passe, par l url pour Get, ou par php en POST
$key = $_POST ['product'];


echo "la quantite est de" .$quantite;

$product= getProduct($key);

$priHTquanti = $product['prixTTC']*$quantite;

?>


<div class="container">
<h1>Récapitulatif d'achat</h1>
<div class="card">
  <div class="card-header">
    Produit
  </div>
  <div class="card-body">
    <h5 class="card-title"> <?php echo $product['nom'] ?></h5>
    <p class="card-text">Quantité  commandé   :  <strong> <?php echo $quantite ?> </strong></p>
    <p class="card-text">Prix unitaire TTC  : <?php echo formatPrice($product['prixTTC'])?><br> Prix unitaire TTC avec remise <strong> <?php formatPrice(discountedPrice($product['prixTTC'], $product['remise']))?></strong> </p>
    <p class="card-text">Total HT : <?php echo formatPrice(priceExcludingVAT($priHTquanti)) ?></p>
    <p class="card-text">Total TTC : <?php echo formatPrice($product['prixTTC']*$quantite)?></p>
    <br>
    <p class="card-text">Prix Final TTC avec une remise de (<?php  echo  formatPrice( $product['remise']) ?> ) : <br> <strong> <?php echo formatPrice($priHTquanti-($product['remise'])) ?></p> 
  </div>
  <div class="card-footer text-muted">
  <input type="date" value="<?php echo date('Y-m-d'); ?>">
  </div>
</div>
</div>


<?php
include  "template/footer.php";

?>