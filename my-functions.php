<?php



function formatPrice($prixEnCentimes) {
    $prixEnEuros = number_format($prixEnCentimes / 100, 2, '.', ' ');
    echo $prixEnEuros . '€' . "<br>";
}

// Pour l'afficher =>      formatPrice (1000);




function priceExcludingVAT($prixTTC, $tax =20){
    $montantHT= ((100*$prixTTC)/(120));
return $montantHT;
}

/*echo priceExcludingVAT(3000) . "<br>";

echo formatPrice(priceExcludingVAT(3000)) . "<br>";*/



function discountedPrice($prixTTC, $remise){
    $montantRemise = $prixTTC - $remise;
    return $montantRemise;
}

/*echo discountedPrice(3000, 300) . "<br>";
echo formatPrice( discountedPrice(3000,300)) . "<br>";*/


?>