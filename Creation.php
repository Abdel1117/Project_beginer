<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    /**
     * Verification que les inputs sont bien compatible avec le regex
     * Verification si les Methode POST on etait appeller et si il ne sont pas vide
     * 
     * Si il ne sont pas vide on les rentre dans les parametre pour verifier si les entrées ne sont pas déja dans la base de donnée
     * Si il sont vide on redirige vers la page 
     * Sinon
     * Si il n'y a aucun champs qui est déjà entrer dans la BDD on insere les infoirmation dans la basse de donnée 
     * Sinon on notifie le cliens Que les champs sont déja pris Et lequelle
     * 
     * 
     */

    

    function checkPass(string $mdp1,string $mdp2){
        if($mdp1 === $mdp2){
            return true;
        }
        else{
            return false;
        }
    }
    

    if(isset($_POST['pseudo'],$_POST['email'],$_POST['password'],$_POST['password_check'])){
        $pseudo = trim(htmlspecialchars($_POST['pseudo']));
        $email = trim(htmlspecialchars($_POST['email']));
        $password = trim(htmlspecialchars($_POST['password']));
        $password_check = trim(htmlspecialchars($_POST['password_check']));
        
        if(!empty($pseudo) &&  
        !empty($email) &&  
        !empty($password) && 
        !empty($password_check)){
            $siblingMotdepasse = checkPass($password, $password_check);
            if($siblingMotdepasse === true){
                $db = new PDO("mysql:host=localhost;dbname=test","admin","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

                $stm = $db->prepare("SELECT COUNT(*) FROM user_data WHERE pseudo = :name OR password = :password");
            
                $stm->bindParam(":name", $pseudo,PDO::PARAM_STR);
                $stm->bindParam(":password", $password, PDO::PARAM_STR);
            

                $stm->execute();
                $result = $stm->fetchColumn();
                if($result == 0){
                    $stm  = $db->prepare("INSERT INTO user_data (pseudo, email , password) VALUE(:nom, :email, :password)");
                    $stm->bindValue(":nom", $pseudo);
                    $stm->bindValue(":email",$email);
                    $stm->bindValue(":password", password_hash($password,PASSWORD_DEFAULT));
                    $stm->execute();
                    session_start();
                    $_SESSION['pseudo'] = $pseudo; 
                    $stm->closeCursor();

                    header("location:index.php");
                    

                }else{
                    echo "Pseudo ou Mot de passe Déja pris veuillez revenir dans la page <a href='Login.html'>Login</a>";
                }
            }else{
                echo "Mot de passe pas Identique veuillez revenir sur la page <a href='Login.html'>Login</a>"; 
            }
        }else{
            echo "Variable manquante";
        }
        
    }
    else{
        echo "Porbleme de Transfert de données";
    }


?>