<?php
//class qui gere la connexion BDD

class database{

    static $hostname = "localhost";
    static $dbname = "listecourses";
    static $userdb = "root";
    static $mdpdb = "";
    static $driverdb = "mysql";
    static $connect;

    //connexion DB

    static function createConnexion(){
        if(empty(self::$connect)){
            self::$connect = new PDO(self::$driverdb.":host=".self::$hostname.";dbname=".self::$dbname, self::$userdb, self::$mdpdb);
        }
    }

    //DB Query recup la liste


    static function getList()
    {
            self::createConnexion();
        $sql = "SELECT nom FROM produit";
        $data = self::$connect->query($sql);
        return $data->fetchAll(PDO::FETCH_OBJ);
    }

    // pour ajouter dans notre liste
    static function addProd()
    self::createConnexion();
    $sql= "INSERT INTO produit(id, nom, prix_unit) VALUES ('', 'test','5euro')";    
    if ($connect -> query($sql)===TRUE){
        echo "ADD Success!"
    }else{
        echo "ERROR" . $sql . "<br>" . $connect->error; 
    }
    
    /* if (isset($_POST['sub_btn']))
            {
                self::createConnexion();
                if(!mysql_query("INSERT INTO produit(id, nom, prix_unit) VALUES ('', 'test','5euro')") )
                die ("Verifier la connexion");
            }
    */
}


