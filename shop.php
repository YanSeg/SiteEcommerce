<?php


include  "template/header.php";
include  "my-functions.php";
include "lesproduits.php";

?>



<div class="grid">
    <?php

    foreach ($lesproduits as $key => $produit) : 
    ?>

        <form action="cart.php" method="POST">

            <div class="produit">

                <h3> <?php echo $produit['nom'] ?>  </h3>

                <input type="hidden" type=texte name="nom" id="nom" value="<?php echo $produit['nom'] ?>">

                <p> Prix initiale HT: <?php echo formatPrice(priceExcludingVAT($produit['prixTTC'])) ?> </p>
               

                <p>  Prix initiale TTC : <?php echo formatPrice($produit['prixTTC']) ?>  </p>
                

                <p>  Prix Final après remise : <?php echo  formatPrice(discountedPrice($produit['prixTTC'], $produit['remise'])) ?> </p>
                

                <img src="<?php echo $produit['image'] ?>">


                <div class="form-group">
                    <label for="quantite">Quantité :</label>
                    <input type="number" min="0" max="100" class="form-control" id="quantite" name="quantite" placeholder="Entrez la quantité">
                </div>
                <div class="boutoncommande">
                    <button class="btn btn-primary"> Ajouter au panier</button>
                </div>

                <input type="hidden" type=number name="prixHT" id="prixHT" value="<?php echo formatPrice(priceExcludingVAT($produit['prixTTC'])) ?>">
                <input type="hidden" type=number name="prixTTC" id="prixTTC" value="<?php $produit['prixTTC']?>">
                <input type="hidden" type=texte name="prixRemise" id="prixRemise" value="<?php echo  formatPrice(discountedPrice($produit['prixTTC'], $produit['remise'])) ?>">
               
        </form>
</div>
<?php endforeach;
?>
</div>



<?php
include  "template/footer.php";
?>