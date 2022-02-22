<?php 
session_start();
require('DataManager.php');

header('Content-Type: text/html; charset=ISO-8859-1');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">
    <script src="main.js" defer></script>
    <title>Document</title>
</head>
<body>
        <div class="main-container" id="main-container">
            <nav class="nav-container" id="nav-container">
                <div class="logo" id="logo">
                    <i class="bi bi-person"></i>
                    <?php 
                    if(session_status() === PHP_SESSION_ACTIVE){

                        if(isset($_SESSION["pseudo"])){
                        echo"<a class='login_profil' href='MonCompte.php'>Mon Compte <a/>";
                        echo"<a class='login_profil' href='deco.php'>Deco<a/>";
                        }
                    

                    elseif(empty($_SESSION)){
                    echo "<a class='login_profil' href='Login.php'>Login<a/>";
                }
            }
                ?>
                </div>

                <div class="link-container" id="nav-list">
                <a href="index.php" class="links" id="link1">Acceuil</a>
                <a href="boutique.php" class="links" id="link2">Boutique</a>
                <a href="Chat.php" class="links" id="link3">Chat</a>
                <a href="News.php" class="links" id="link4">News</a>
                <a href="panier.php" class="links" id="link5">Panier</a>
            </div>

                <div class="search-container" id="search-container">
                    <div class="container">
                        <i class="bi bi-search"></i>
                        <input placeholder="Rechercher" type="text" >
                        <button>Rechercher</button>
                    </div>
                </div>
            </nav>
            </body>
                
