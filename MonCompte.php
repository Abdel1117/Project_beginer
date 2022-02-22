<?php 
    require('DataManager.php');
    session_start();
    $db = new PDO("mysql:host=localhost;dbname=test", "root", "" );
    $manager = new DataManager($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">
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
                    header("Login.php");
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

        <section class="create_Account">
            <div class="profil_Boar">
                <img class = "imagestyle" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
                <?php
                echo "<div id='board_info'>";
                $manager->selectPseudo($db);
                "</div>";
            ?>

            </div>
        
        
        </section>

    </div>
</body>
</html>
