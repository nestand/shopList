<?php
try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

   }
catch(PDOException $e) {
    echo $e->getMessage();
}