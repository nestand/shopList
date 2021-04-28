<?php
//class qui gere la connexion BDD

class database
{
    public static $hostname = "localhost";
    public static $dbname = "listecourses";
    public static $userdb = "root";
    public static $mdpdb = "";
    public static $driverdb = "mysql";
    public static $connect;

    //connexion DB

    public static function createConnexion()
    {
        if (empty(self::$connect)) {
            self::$connect = new PDO(self::$driverdb.":host=".self::$hostname.";dbname=".self::$dbname, self::$userdb, self::$mdpdb);
        }
    }

    //DB Query recup produits


    static function getList()
    {
            self::createConnexion();
            $sql = "SELECT nom FROM produit";
            $data = self::$connect->query($sql);
            return $data->fetchAll(PDO::FETCH_ASSOC);
    }


   
  //selection d'un magasin
   static function chooseShop()
   {
       self::createConnexion();
           $sql = "SELECT nom FROM magasin";
           $data = self::$connect->query($sql);
           return $data->fetchAll(PDO::FETCH_ASSOC);
      
   }
   
   // update produit
   static function updateProduct()
   {
    self::createConnexion();
    $sql="UPDATE produit SET nom='kefir',prix_unit=5 WHERE id_produit=22 ";
    $query = self::$connect->query($sql);
    if ($query!=false) {
        echo "UPDATE Success!";
    } else {
        echo "ERROR" . $sql . "<br>";
    }
   }

   /*
   // pour ajouter dans notre liste
    static function addProd()
    
    {
        self::createConnexion();
        $sql= "INSERT INTO produit(nom, prix_unit) VALUES ('test6',5)";
        $query = self::$connect->query($sql);
        // $connect= $query->execute();
        if ($query!=false) {
            echo "ADD Success!";
        } else {
            echo "ERROR" . $sql . "<br>";
        }
    }
        
    //pour supprimer dans notre liste
     static function dropProd()
     {
         self::createConnexion();
         $sql="DELETE FROM `produit` WHERE nom = 'test6'";
         $query = self::$connect->query($sql);
         if ($query!=false) {
            echo "DROP Success!";
        } else {
            echo "ERROR" . $sql . "<br>";
        }
     }

    */
    /* if (isset($_POST['sub_btn']))
            {
                self::createConnexion();
                if(!mysql_query("INSERT INTO produit(id, nom, prix_unit) VALUES ('', 'test','5euro')") )
                die ("Verifier la connexion");
            }
                */
}
database:: createConnexion();
database:: chooseShop();
database:: getList();
database:: updateProduct();
//database:: addProd();
//database:: dropProd();
