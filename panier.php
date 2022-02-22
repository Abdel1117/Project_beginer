<?php 
require("header.php");
require("qtePanier.php");
$db = new PDO("mysql:host=localhost;dbname=test","root","");
$dataManager = new DataManager($db);

//If session_pseudo isset and not empty we keep our cheeckup else we display a message for the user
if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

    //If  we create a new pannier else if pannier alreadyexist ok 
    if(!isset($_SESSION['pannier'])){
        $_SESSION['pannier'] = array();
        $_SESSION['qte'] = array();
        $_SESSION['prix'] = array();
    }

}
else{
    echo "<h1>Veuillez vous connecter ou cree un compte pour pouvoir effectuer des achats</h1>";
}
//We are going to check if we have a get to take from our url to add a product to our pannier
//If we got a GET we add the value to the pannier ONCE else we notice that it is already in the pannier
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(in_array($_GET['id'],$_SESSION['pannier']) === true){
        echo "Product already in pannier.</br>Go Back to the <a href='boutique.php'>Shop</a>";
        $request = $db->prepare("SELECT * FROM product_theme WHERE id =".$id);
        $request->execute();
        $donnee = $request->fetchAll();
        array_push($_SESSION['pannier'],$id);
        header("location:panier.php");
        
    }
    else{
        array_push($_SESSION['pannier'],$_GET['id']);
        $request = $db->prepare("SELECT * FROM product_theme WHERE id =".$id);
        $request->execute();
        $donnee = $request->fetchAll();
        
        foreach ($donnee as $key) {
            $key[3] = utf8_decode($key[3]);
            # code...
                    echo "<div id='container_shop' class= 'container_shop'>
                        <h3>$key[2]</h3>
                        <h3>$key[4]&#8364 </h3>

                        <img id ='img_shop' class='img_shop' src = '$key[5]'></img>
                        <p id= 'desc_shop' class= 'desc_shop'>$key[3]</p>
                        <p id= 'desc_date' class= 'desc_date'>$key[1]</p>
                        <a href='panier.php?id=$key[0]'>Acheter</a>
                    </div>";
        }
        $price = array_column($donnee,4);//On recupere le prix dans la requete sql
        $price = implode($price);
        
        array_push($_SESSION['prix'],$price);//On ajoute le prix dans le tableau des prix de la sesion
        $totalprice = calcProduitTotal($_SESSION['prix']);//On appelle la fonction afin de calculer le prix total des valeur dans le tableau session prix
        header("location:panier.php",true);
    }

}elseif(isset($_SESSION['pannier']) && !empty($_SESSION['pannier'])){
    $id =  $_SESSION['pannier'];
    $request = $db->prepare("SELECT * FROM product_theme WHERE id IN (".implode(",",$id). ")" );
    $request->execute();
    $donnee = $request->fetchAll();
    echo "<table style='border:1px solid black; border-collapse: collapse;'>
    <tr>
    <th>Nom</th>
    <th>Produit</th>
    <th>Prix</th>
    <th>Quantite</th>
    <th>Supprimer</th>
</tr>";
    $arrayTotalPrice = []; 
    //Nous allons rajouter tous les prixx calcule avec la sym dans cette array et a chaque ajout il recalculera 
    foreach ($donnee as $key) {
        $key[3] = utf8_decode($key[3]);
        # code...
        $qte = qteProduit($key[0]);
        echo "
        <tbody>
            <tr>
                <td>$key[2]</td>
                <td><img id='panier-img' src='$key[5]' ></td>
                <td>$key[4]  &#8364</td>
                <td>$qte
                <span><a href='ajouterProduit.php?id=$key[0]'>+</a></span>
                </td>
                <td> <a href='panier_Delete.php?id=$key[0]'>Supprimer</a></td>
            </tr>
        ";
        $totalPrice = $key[4] * $qte;
        array_push($arrayTotalPrice,$totalPrice);
    }
    $array_sum = array_sum($arrayTotalPrice);
    echo "  <td colspan='5'>
    Total Price $array_sum &#8364
    </td>
    </tr></tbody>
    </table>";
};


if(isset($_SESSION['prix']) && empty($_SESSION['prix'])){
    if(isset($donnee)){
    $price = array_column($donnee,4);//On recupere le prix dans la requete sql
    $price = implode($price);
    array_push($_SESSION['prix'],$price);//On ajoute le prix dans le tableau des prix de la sesion
    $totalprice = calcProduitTotal($_SESSION['prix']);//On appelle la fonction afin de calculer le prix total des valeur dans le tableau session prix
    }
}
else{
    $totalprice = calcProduitTotal($_SESSION['prix']);
}



