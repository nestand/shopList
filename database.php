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

    //DB Query pour la liste


    static function getList()
    {
            self::createConnexion();
        $sql = "SELECT nom FROM magasin";
        $data = self::$connect->query($sql);
        return $data->fetchAll(PDO::FETCH_OBJ);
    }

    
}


