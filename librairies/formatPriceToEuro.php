<?php 

function formatPriceEuro(int $price) : string {
//  Je transforme le prix en centime par un prix en euris
    $priceInEuro = $price / 100;
// Je formate le prix en euro afin qu'il soit coforme à l'affiche européan desprix 
    $priceInEuroFormated = number_format($priceInEuro,2,","," ");
// Je retourne mon résultat
    return $priceInEuroFormated . 'Euro';
    
}



?>