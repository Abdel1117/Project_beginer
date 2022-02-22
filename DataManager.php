
<link rel="stylesheet" href="main.css">

<?php
/**
 * Class permetant de travailler directement avec la base de donnée 
 * CRUD() -> a faire  
 * @$db 
 * 
 * 
 */

class DataManager{

    private $_db;


    public function __construct($db){
        $this->setDb($db);
    }
    public function add($db){
    }

/*    public function remove($db){

    }

    public function update($db){
        $stm = $this->_db->prepare("UPDATE Nom_du_produit Description Prix image FROM product_theme");
        $stm->bindValue();
        $stm->execute();
        

    }*/
    public function select($db){
        $stm = $this->_db->prepare("SELECT * FROM product_theme");
        $stm->execute();
        $donne = $stm->fetchAll();
       
        foreach ($donne as $key) {
            $key[3] = utf8_decode($key[3]);
            # code...
             echo "  <div id='container_shop' class= 'container_shop'>
                        <h3>$key[2]</h3>
                        <h3>$key[4]&#8364 </h3>

                            <img id ='img_shop' class='img_shop' src = '$key[5]'></img>
                                <p id= 'desc_shop' class= 'desc_shop'>$key[3]</p>
                                <p id= 'desc_date' class= 'desc_date'>$key[1]</p>
                                <a href='panier.php?id=$key[0]'>Acheter</a>
                    </div>";
}
        $stm->closeCursor();
}
    public function selectOne($db){
        $request = $this->_db->prepare("SELECT * from product_theme WHERE type = :recherche");
        $request->bindValue(":recherche",PDO::PARAM_STR);
        
    }
    public function selectPseudo($db){
        $stm = $this->_db->prepare("SELECT * from user_data WHERE pseudo = :pseudo");
        $stm->bindParam(":pseudo", $_SESSION['pseudo']);
        $stm->execute();

        $donne = $stm->fetchAll();
        
        foreach($donne as $key){
            echo "<p id='para-options'> $key[1]</p>";
            echo "<p id='para-email'> $key[2]</p>";
            echo "<p id='para-id'>$key[0]</p>";
        }
        
    }
    public function update($db,int $id){


        $stm = $this->_db->prepare("UPDATE user_data SET password = :nvpass WHERE id = :id");
        
        $stm->execute();
    }

    public function displayPanier(){
        
    }

    public function SelectNews($db){
        $request = $this->_db->prepare('SELECT * FROM test_news');
        $request->execute();
        $donnée = $request->fetchAll();

        foreach ($donnée as  $value) {
            # code...
            
            echo
            "<div id ='news_div'>
                <h1 class='title-title'>$value[1]</h1>
                    <span class='reveal-loaded reveal'>$value[1]</span>    
                    <p class='reveal-loaded reveal'>$value[2]</p>
                    <span class='reveal-loaded reveal'>$value[3]</span>
            </div>";
        }
        $request->closeCursor();
    }

    public function setDb(PDO $db){
        $this->_db = $db;
    }
}
?>
