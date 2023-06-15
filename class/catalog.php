<?php

require_once "item.php";
// class Catalogue {

// public array $items;
// public $db;
// public string $sqlquery_products = "SELECT * FROM products";
// public array $item;

// public function __construct()
// {
//     $this->getProducts();
// }

// public function getProducts(){
//     $this->db = new db();

// $items = $this->db->GetTableBdd($this->sqlquery_products);

//     foreach ($items as $itemData) {
//         // var_dump($items);
//         // var_dump($itemData);


//         $item = new Item (
//             $itemData['idproducts'],
//             $itemData['name'],
//             $itemData['price'],
//             $itemData['image_url'],
//             $itemData['weight'],
//             $itemData['stock'],
//             $itemData['available'],

//         );

//         $items[] = $itemData;
//         // var_dump($itemData);
//         var_dump($item);

//     }  
// }
// }


// function getName(): array
//     {
//         return $this->  itemData['name'];
//     }

// }




// echo "---------------------------------------------------------";

// function displayCatalogue(Catalogue $items): void {
//     $items->getName();

// }







class Catalogue
{

    public array $items;
    public $db;
    public array $item;

    public function __construct(array $data)
    {
        $this->items = $data;
    }

    public function display()
    {

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
            displayItem($item);
        }
   
    }
}



function getProducts()
{
    $sqlquery_products = "SELECT * FROM products";
    $db = new db();
    $items = $db->GetTableBdd($sqlquery_products);
    return $items;
}
