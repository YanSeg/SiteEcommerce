<?php
require_once  "template/header.php";
require_once  "my-functions.php";
require_once "lesproduits.php";



// _____________________________________ Utilisation de la BDD


class Item
{
    private int $idproducts;
    private string $name;
    private int $price;
    private string $imageUrl;
    private int $weight;
    private int $stock;
    private bool $available;

    public function __construct(int $idproducts, string $name, int $price, string $imageUrl, int $weight, int $stock, bool $available)
    {
        $this->idproducts = $idproducts;
        $this->name = $name;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->weight = $weight;
        $this->stock = $stock;
        $this->available = $available;
    }


    function getId(): int
    {
        return $this-> idproducts;
    }

    function getName(): string
    {
        return $this-> name;
    }
    function getPrice(): int
    {
        return $this->price;
    }
    function getImage(): string
    {
        return $this->imageUrl;
    }
    function getWeight(): int
    {
        return $this->weight;
    }
    function getStock(): int
    {
        return $this->stock;
    }

    function getAvailable(): bool
    {
        return $this->available;
    }
}





function displayItem(Item $item): void
{

    echo '<div>';
    echo '<h2>' . $item->getName() . '</h2>';
    echo '<p>Price: ' . $item->getPrice() . '</p>';
    echo '<img src="' . $item->getImage() . '" alt="' . $item->getName() . '">';
    echo '<p>Weight: ' . $item->getWeight() . '</p>';
    echo '<p>Stock: ' . $item->getStock() . '</p>';
    echo '<p>Available: ' . ($item->getAvailable() ? 'Yes' : 'No') . '</p>';
    echo '</div>';
}






// class Catalogue
// {

//     private array $items;

//     public function __construct()
//     {
//         $this->items = $this->fetchItemsFromDatabase();
//     }
//     private function fetchItemsFromDatabase(): array
//     {
//         // Logique pour récupérer les données des items depuis la base de données
//         // Ici, nous simulons simplement un tableau d'objets Item
//         $dataFromDatabase = [
//             ['nom' => 'Chien', 'prix' => 30000, 'urlImage' => 'jhsdbjhsd', 'poids' => 10, 'stock' => 10, 'disponible' => true],
//             ['nom' => 'Chat', 'prix' => 20000, 'urlImage' => 'abcde', 'poids' => 8, 'stock' => 5, 'disponible' => false],
//             // ...
//         ];

//         $items = [];
//         foreach ($dataFromDatabase as $itemData) {
//             $item = new Item(
//                 $itemData['nom'],
//                 $itemData['prix'],
//                 $itemData['urlImage'],
//                 $itemData['poids'],
//                 $itemData['stock'],
//                 $itemData['disponible']
//             );
//             $items[] = $item;
//         }

//         return $items;
//     }

//     public function getItems(): array
//     {
//         return $this->items;
//     }
// }

// Dans cet exemple, la classe Catalogue possède une propriété $items qui est un tableau d'objets Item.
// Dans le constructeur, la méthode fetchItemsFromDatabase() est appelée pour récupérer les données des items depuis la base de données et créer les objets Item correspondants. 
// La méthode fetchItemsFromDatabase() est simulée ici, mais vous devrez implémenter la logique réelle pour récupérer les données depuis votre base de données.
// Une fois que vous avez instancié un objet Catalogue, vous pouvez utiliser la méthode getItems() pour obtenir le tableau d'objets Item du catalogue. Par exemple :




// $catalogue = new Catalogue();
// $items = $catalogue->getItems();

// foreach ($items as $item) {
//     $item->displayItem();
// }
// // Cela itérera sur tous les objets Item du catalogue et affichera les informations de chaque item en utilisant la méthode displayItem().
