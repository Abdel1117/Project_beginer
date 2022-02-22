<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">
    <script src="main.js" defer ></script>
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
                <a href="" class="links" id="link5">Panier</a>
            </div>

            <div class="search-container" id="search-container">
                <div class="container">
                    <i class="bi bi-search"></i>
                    <input placeholder="Rechercher" type="text" >
                    <button>Rechercher</button>
                </div>
            </div>
        </nav>
    </div>

    <div class= "bodycontainer">
        <section class="Chat_section">
            <section class='input_message_Section' >
                    <h2>Chat Interface</h2>
                <form action="" method="POST">
                    <textarea type="text" class="message" id="message" name="message"   rows="10"></textarea>
                    <button id= "button_id_send" name ="envoyer_message" id="buttonEnvoyer" type="submit" click="">Envoyer
                    </button>
                        
                </form>
            </section>

            <section class='display_message_Section' >
                <?php
                    $db = new PDO("mysql:host=localhost;dbname=test","root", "");

                    if(!empty($_SESSION)){

                        if(isset($_POST['message']) && isset($_POST['envoyer_message'])){



                            
                            
                            $stm = $db->prepare('INSERT INTO chat_settings (pseudo, message)  VALUES(:pseudo, :message )');
                            $stm->bindValue(":pseudo",$_SESSION['pseudo'], PDO::PARAM_STR);
                            $stm->bindValue(":message", htmlspecialchars($_POST['message']),PDO::PARAM_STR);
                            $stm->execute();
                            
                            $stm->closeCursor();
                            
                        }


                    }elseif(empty($_SESSION)){
                        echo "Pas helloo" ;
                        echo "<script>
                            document.getElementById('message').disabled = true ; ;
                            document.getElementById('button_id_send').disabled = true ;
                        </script>";
                    }


                    $stm = $db->prepare("SELECT * FROM chat_settings ORDER BY  date_message DESC " );
                    
                    $stm->execute();
                    $request = $stm->fetchAll();       
                    foreach ($request as  $value) {
                        # code...
                        echo "<div id='message_box'> <div id = 'message'> <strong>" . $value['pseudo'] ."</strong>" . ": " .  $value['message'] . "</div>" ."    " ."<div id = 'date'>" . " envoyer le :<em>" . $value['date_message'] ."</em> </br></div> </div>"; 
                    }

                    




                
                ?>
            
            
            </section>
        </section>
    </div>

    <button class="up-Button"><i class="bi bi-arrow-up"></i></button>

</body>
</html>




