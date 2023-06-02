<?php

function getProducts()
{
    return  [

        "DOG" => [
            'nom' => "Dog",
            'prixTTC' => 300000,
            'weight' => 3000,
            'remise' => 3000,
            'image' => "http://localhost/Module1/image/dog.png"
        ],

        "COC" => [


            'nom' => "cocinelle",
            'prixTTC' => 3000,
            'weight' => 3,
            'remise' => 300,
            'image' => "http://localhost/Module1/image/coci.png"

        ],

        "CAT" => [
            'nom' => "chat",
            'prixTTC' => 170000,
            'weight' => 1000,
            'remise' => 30000,
            'image' => "http://localhost/Module1/image/cat.png"

        ]
    ];
}



function getProduct($key)
{
    $products = getProducts();

    if (!isset($products[$key])) {
        throw new Exception("Le produit $key n'existe pas");
    }

    return $products[$key];
}


// $lesproduits = [

//     'Dog' => [
//          'nom' => "Dog",
//          'prixTTC' => 30000,
//          'weight' => 3000,
//          'remise' => 300,
//          'image' => "http://localhost/Module1/image/dog.png"
//      ],
 
//      'Cocinelle' => [
 
 
//          'nom' => "cocinelle",
//          'prixTTC' => 3000,
//          'weight' => 3,
//          'remise' => 30,
//          'image' => "http://localhost/Module1/image/coci.png"
 
//      ],
 
//      'Chat'=> [
//          'nom' => "chat",
//          'prixTTC' => 30000,
//          'weight' => 1000,
//          'remise' => 300,
//          'image' => "http://localhost/Module1/image/cat.png"
 
//     ],
//  ];
