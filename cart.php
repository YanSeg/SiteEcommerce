<?php

include  "template/header.php";
include  "my-functions.php";
include "lesproduits.php";

$quantite = $_POST['quantite'];  //$_POST ,ou get, est une variable globale qui permet de recupérer tout ce qui passe, par l url pour Get, ou par php en POST

$prixTTC = $_POST['prixTTC'];



?>

<!-- 
<div class="container">
<h1>Récapitulatif d'achat</h1>
<div class="card">
  <div class="card-header">
    Produit
  </div>
  <div class="card-body">
    <h5 class="card-title"> <?php echo $nom ?></h5>
    <p class="card-text">Quantité  commandé   :  <strong> <?php echo $quantite ?> </strong></p>
    <p class="card-text">Prix unitaire TTC  : <?php echo $prixTTC ?> Prix unitaire avec remise <strong> <?php echo $prixRemise ?></strong> </p>
    <p class="card-text">Total HT : <?php echo $prixHT*$quantite ?></p>
    <p class="card-text">Prix avec remise  : <?php echo$prixRemise ?></p>
    <p class="card-text">Prix TTC : 99,99 €</p>
  </div>
  <div class="card-footer text-muted">
    Date d'achat : 01/06/2023
  </div>
</div>
</div> -->


<?php
include  "template/footer.php";

?>