<?php
require("qtePanier.php");
session_start();
$id = $_GET['id'];

function add($id){
    array_search($id,$_SESSION['pannier']);
    
    array_push($_SESSION['pannier'],$id) ;
    
}

    //Nous allons lire le tableau Get afin d'incrmeenter la quantité des produits
    add($id);
    header("location:panier.php");
