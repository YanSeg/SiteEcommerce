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







class Catalogue
{

    public array $items;
    public $db;
    // public array $item;

    public function __construct(array $data)
    {
        $this->items = $data;
        getProducts($data);
      

    }

    public function display(){

        foreach ($this->items as $itemData) {
            $item = new Item(
                $itemData['idproducts'],
                $itemData['name'],
                $itemData['price'],
                $itemData['image_url'],
                $itemData['weight'],
                $itemData['stock'],
                $itemData['available'],
    
            );
    
            $items[] = $itemData;
            // var_dump($itemData);
            var_dump($item);
        }
        return $items;
    }
}



function getProducts($items)
{
    $sqlquery_products = "SELECT * FROM products";
    $db = new db();
    $items = $db->GetTableBdd($sqlquery_products);
    return $items;
 
}










echo "---------------------------------------------------------";






class Catalogue {

public array $items;
public $db;
public string $sqlquery_products = "SELECT * FROM products";
public array $item;

public function __construct()
{
    $this->getProducts();
}

public function getProducts(){
    $this->db = new db();

$items = $this->db->GetTableBdd($this->sqlquery_products);

    foreach ($items as $itemData) {
        // var_dump($items);
        // var_dump($itemData);


        $item = new Item (
            $itemData['idproducts'],
            $itemData['name'],
            $itemData['price'],
            $itemData['image_url'],
            $itemData['weight'],
            $itemData['stock'],
            $itemData['available'],
           
        );

        $items[] = $itemData;
        // var_dump($itemData);
        var_dump($item);

    }  
}
}