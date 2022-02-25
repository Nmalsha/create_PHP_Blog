<?php

namespace models;
use PDO;

class Dbh {

protected function connect(){

    try{
       
        $dBUsername = "root";
        $dBUPassword = "";
        
$dbh = new PDO('mysql:host=localhost;dbname=blogposts', $dBUsername, $dBUPassword);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
return $dbh;
 
    }
    

    catch(PDOException $e){
print "Error DB!" .$e->getMessage() . "<br/>";
throw new \Exception('DB ERROR');
    }
    
}

}