<?php




 class Dbh {


//Connection property
public $_connection;

public $table;
public $id;

    protected function connect()
    {
        $this->_connection = null;


         try{
       
        $dBUsername = "root";
        $dBUPassword = "";
        
        $dbh=   $this->_connection;

        $dbh = new PDO('mysql:host=127.0.0.1;dbname=blogposts', $dBUsername, $dBUPassword);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $dbh;
 
        }
    

    catch(PDOException $e)
    {
        print "Error DB!" .$e->getMessage() . "<br/>";
        throw new \Exception('DB ERROR');
    }

    }

        }