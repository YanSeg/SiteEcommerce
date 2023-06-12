<?php



function formatPrice($prixEnCentimes) {
    $prixEnEuros = number_format($prixEnCentimes / 100, 2, '.', ' ');
    echo $prixEnEuros . '€';
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


function nomTranspo (){
    if (isset($_POST['choixtranspo'])) {
      $valeurSelectionnee = $_POST['choixtranspo'];
      echo  $valeurSelectionnee;
   
    }
}

function AffichageTarifs($valeurSelectionnee){
    if (isset($valeurSelectionnee))   {
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
    }
    
    


function prixfinalTranspoPoid($transpo, $poidTotalCommande)
{

  if (isset($transpo)) {
    if ($poidTotalCommande <= 500) {
      $prixFinalTranspo = $transpo['1'];
      echo  formatPrice($prixFinalTranspo);
    } elseif ($poidTotalCommande <= 2000) {
      $prixFinalTranspo =  $transpo['2'];
      echo  formatPrice($poidTotalCommande);
    } elseif ($poidTotalCommande > 2000) {
      $prixFinalTranspo = $transpo['3'];
      echo  formatPrice($poidTotalCommande);
    }
  }
}



// _____________________________________ Utilisation de la BDD

try {
  $db = new PDO('mysql:host=localhost;dbname=catalogEcommerce;charset=utf8', 'MAESTRO', 'MAESTRO//1234');
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}



function GetTable($db, $prdot){
  $fonct = $db->prepare($prdot);
  $fonct->execute();
  $fonct = $fonct->fetchAll();
  return $fonct;
  }
  
$prod="SELECT * FROM products";
$produits = GetTable($db, $prod);

var_dump($produits);
