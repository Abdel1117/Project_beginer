<?php 
session_start();
$id = $_GET['id'];
require("qtePanier.php");


function deletepannier($id){
    /*Nous allons ici verfier qu'il y a bien une session panier et ensuite nous allons recuperer l'element a supprimmer ensuite renvoyer la nouvelle session*/
    $database = new PDO("mysql:host=localhost;dbname=test","root","");
    $request = $database->prepare("SELECT Prix FROM product_theme WHERE id IN (". $id . ")");
    $request->execute();
    $donne = $request->fetch();
    
    if(isset($_SESSION['pannier']) && !empty($_SESSION['pannier'])){
        $id = $_GET['id'];
        $price = $donne[0];
        var_dump($price);
        $touched = array_search($id,$_SESSION['pannier']);
        $priceToDelete = array_search($price,$_SESSION['prix']);

        unset($_SESSION['prix'][$priceToDelete]);
        unset($_SESSION['pannier'][$touched]);
        header("Location:panier.php");
    }
}
deletepannier($id);