<?php

function getProducts()
{
    return  [

        "DOG" => [
            'nom' => "Dog",
            'prixTTC' => 300000,
            'weight' => 7000,
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
            'weight' => 3000,
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




function getTransporteur (){
   

return [

    "Chronopost" => [
        '1' => 5,
        '2' => 12,
        '3' => 0
        
    ],
    "Poste" =>   [
        '1' => 3,
        '2'=> 51,
        '3' => 14

    ]
    ];
    
}