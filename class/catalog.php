<?php

require_once "item.php";



class Catalogue
{

    public array $items;
    public $db;
    public array $item;

    public function __construct(array $data)
    {
        $this->items = $data;
    }


    // function displayCatalogue(Catalogue $item)
    // {

    //     foreach ($this->items as $itemData) {
    //         $item = new Item(
    //             $itemData['idproducts'],
    //             $itemData['name'],
    //             $itemData['price'],
    //             $itemData['image_url'],
    //             $itemData['weight'],
    //             $itemData['stock'],
    //             $itemData['available'],

    //         );
    //         displayItem($item);
    //     }
    // }
}



function displayCatalogue(Catalogue $catalogue)
{
    foreach ($catalogue->items as $itemData) {
        $item = new Item(
            $itemData['idproducts'],
            $itemData['name'],
            $itemData['price'],
            $itemData['image_url'],
            $itemData['weight'],
            $itemData['stock'],
            $itemData['available']
        );
        displayItem($item);
    }
}