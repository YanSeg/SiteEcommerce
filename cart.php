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

echo "poid total de la commande " . $poidTotalCommande . "g <br>";


if (isset($_POST['choixtranspo'])) {
  $valeurSelectionnee = $_POST['choixtranspo'];
  echo  $valeurSelectionnee;
}


if (isset($valeurSelectionnee)) {
  if ($valeurSelectionnee == "Chronopost") {
    $transpo = (getTransporteur($valeurSelectionnee));
    print_r(getTransporteur($valeurSelectionnee));
  } elseif ($valeurSelectionnee == "Poste") {
    $transpo = (getTransporteur($valeurSelectionnee));
    var_dump(getTransporteur($valeurSelectionnee));
  } else {
  }
}






if (isset($valeurSelectionnee)) {
  if ($valeurSelectionnee == "Chronopost") {
    $transpo = getTransporteur($valeurSelectionnee);

    echo  formatPrice($transpo['1']) . "   de frais de port de 0 à 500g  <br>";
    echo  formatPrice($transpo['2']) . "   de frais de port  de 500g à 2kg <br>";
    echo  formatPrice($transpo['3']) . "   de frais de port pour tout colis supérieur à 2Kg <br>";
  } elseif ($valeurSelectionnee == "Poste") {
    $transpo = (getTransporteur($valeurSelectionnee));
    echo  formatPrice($transpo['1']) . "   de frais de port de 0 à 500g <br>";
    echo  formatPrice($transpo['2']) . "   de frais de port  de 500g à 2kg <br>";
    echo  formatPrice($transpo['3']) . "   de frais de port pour tout colis supérieur à 2Kg <br>";
  } else {
  }
}

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
          </strong>
        </p>
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
  <!-- </form> -->
  <div class="card">
    <div class="card-header">
      Choix du transporteur
    </div>
    </form>
    <!-- <form action="cart.php" method="POST"> -->

    <form action="cart.php" method="POST">
    <div>
      <div class="card-text">

        <select name="choixtranspo" class="form-control">
        <option value="">Sélectionner un transporteur pour finaliser l'achat</option>
          <option value="Chronopost">chrono</option>
          <option value="Poste">poste</option>
        </select>

      </div>

      <div class="card-body">

        <h5 class="card-title"> Vous avez sélectionné : <?php nomTranspo() ?></h5>

        <p class="card-text">Quantité commandé :

          <input type="number" class="form-control" name="quantite" value="<?php echo $quantite ?>" min="1" max="100">

        </p>
        <input type="hidden" name="product" value="<?php echo $key ?>">

        <button class="btn btn-primary">Valider le transporteur</button>


      </div>
  <div>
  <div> <?php if (isset($valeurSelectionnee)){AffichageTarifs($valeurSelectionnee);} ?> <Br></div>
   <p> Le coute de transport est de :  <?php if (isset($transpo)){ PrixfinalTranspoPoid ($transpo, $poidTotalCommande);} ?> <p> 
  
  </div>


      <button class="btn btn-primary" type="submit" value="Envoyer"> Valider </button>
    </div>
  </div>

  </form>
</div>



<?php

include "template/footer.php";

?>