<?php

include  "template/header.php";
include  "my-functions.php";
include "lesproduits.php";

$quantite = $_POST['quantite'];  //$_POST ,ou get, est une variable globale qui permet de recupérer tout ce qui passe, par l url pour Get, ou par php en POST
$key = $_POST['product'];


echo "la quantite est de" . $quantite;

$product = getProduct($key);

$priHTquanti = $product['prixTTC'] * $quantite;

$totalRemise =   $product['remise'] * $quantite;
echo "<br>";
$poidTotalCommande = $product['weight'] * $quantite;
echo "<br>";
echo $poidTotalCommande;


// echo "<br>";
// $chrono = $_POST['chrono'];
// echo "<br>";
// echo $chrono;

// $section= $_POST['selection'];

?>


<div class="container">
  <h1>Récapitulatif d'achat</h1>
  <div class="card">
    <div class="card-header">
      Produit
    </div>
    <form action="cart.php" method="POST">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $product['nom'] ?></h5>
        <p class="card-text">Quantité commandé : 
          <strong> 
          <input type="number" class="form-control" name="quantite" value="<?php echo $quantite ?>" min="1" max="100">
        </strong></p>
        <input type="hidden" name="product" value="<?php echo $key ?>">

        <button class="btn btn-primary">Mettre à jour le panier</button>
        <p class="card-text">Prix unitaire TTC : <?php echo formatPrice($product['prixTTC']) ?><br> Prix unitaire TTC avec remise <strong> <?php formatPrice(discountedPrice($product['prixTTC'], $product['remise'])) ?></strong> </p>
        <p class="card-text">Total HT : <?php echo formatPrice(priceExcludingVAT($priHTquanti)) ?></p>
        <p class="card-text">Total TTC : <?php echo formatPrice($product['prixTTC'] * $quantite) ?></p>
        <br>
        <p class="card-text">Prix Final TTC avec une remise de (<?php echo  formatPrice($totalRemise) ?> ) : <br> <strong> <?php echo formatPrice($priHTquanti - $totalRemise) ?></p>
      </div>
      <div class="card-footer text-muted">
        <input type="date" value="<?php echo date('Y-m-d'); ?>">
      </div>
  </div>
  </form>
  <div class="card">
    <div class="card-header">
      Choix du transporteur
    </div>

    <form action="cart.php" method="POST">

      <div class="input-group">
        <div class="input-group-prepend">
          <select id="oCategorie" name="oCategorie" class="form-control">
            <option> Veuillez sélectionner votre transporteur</option>

            <option value="chrono">chrono</option>
            <option value="poste">poste</option>
          </select>


        </div>
        <input type="hidden" name="product" value="<?php echo $key  ?>">
        <input type="hidden" class="form-control" name="quantite" value="<?php echo $quantite ?>" min="1" max="100">
       

        <button class="btn btn-primary" type="submit"> Valider </button>
      </div>
  </div>

  </form>
</div>



<?php

include "template/footer.php";

?>