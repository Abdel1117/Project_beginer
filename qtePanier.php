<?php
//Fonction afin d'augmenter la quantité des produit dans le panier
function calcProduitTotal(array $price){

    $total = array_sum($price);
    return $total;
}

function qteProduit($id){
    $keys = array_count_values($_SESSION['pannier']);
    $unique = $keys[$id];
    return $unique;

}


