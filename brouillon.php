<?php

include  "template/header.php";
include  "my-functions.php";

?>
<div class="container">
    <h1>Formulaire de commande</h1>
    <form>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
        </div>
        <div class="form-group">
            <label for="produit">Produit :</label>
            <select class="form-control" id="produit">
                <option>Sélectionnez un produit</option>
                <option>Produit 1</option>
                <option>Produit 2</option>
                <option>Produit 3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantite">Quantité :</label>
            <input type="number" class="form-control" id="quantite" placeholder="Entrez la quantité">
        </div>
        <button type="submit" class="btn btn-primary">Commander</button>
    </form>
</div>

<?php
include  "template/footer.php";

?>