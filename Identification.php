<?php

if(isset($_POST['pseudo_identificator']) &&  isset($_POST['password_identificator'])){
    $db = new PDO("mysql:host=localhost;dbname=test","root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $pseudo_identifcator = $_POST['pseudo_identificator'];  
    $password_identificator = $_POST['password_identificator'];
    
    $stm = $db->prepare("SELECT * FROM user_data WHERE pseudo = :pseudo");

   $stm->bindParam(":pseudo" , $pseudo_identifcator);
    $stm->execute();
    $check = $stm->fetchAll();
    for($i =  0 ; $i< count($check); ++$i){
        $pseudoTOcheck = $check[$i]['pseudo'];
        $passwordToCheck =  $check[$i]['password'];
    }
    
    if($pseudo_identifcator === $pseudoTOcheck and password_verify($password_identificator,$passwordToCheck)){
        session_start();
        $_SESSION['pseudo'] = $pseudo_identifcator;
        header("location:index.php");
    }else{
        echo "
        <h2>Erreur sur le mot de passe veuillez revenir a la page des  <a href='Login.php'>login</a<</h2>
        <script>alert('INFO INCORECT')</script>";
    }
    

}
?>