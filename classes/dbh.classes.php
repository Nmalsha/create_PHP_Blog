<?php

class Dbh {

protected function connect(){

    try{
       
        $dBUsername = "root";
        $dBUPassword = "";
        
$dbh = new PDO('mysql:host=localhost;dbname=blogpost', $dBUsername, $dBUPassword);
return $dbh;

    }
    catch(PDOException $e){
print "Error DB!" .$e->getMessage() . "<br/>";
die;
    }

}

}