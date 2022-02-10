<?php

include_once ("connectionDb.php") ;


// creating execute query function
function executeQuery($sql,$data){

global $conn;
$stmt = $conn -> prepare ($sql);
$values = array_values($data);
$types = str_repeat('s',count($values));//counting the number of parameters to add
 $stmt -> bind_param($types,...$values);
 $stmt ->execute();
return $stmt;
}


// function print R - TO BE DELETED
function Ptr($value){
    echo "<pre>",print_r($value,true),"</pre>";
    die;
}

// creating function select all

function selectAll ($table,  $conditions = []){
    global $conn;

    $sql = "SELECT * FROM  $table";
    // formatting sql quary if no  conditions
    if(empty($conditions)){
        $stmt = $conn -> prepare ($sql);
        $stmt ->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        // formatting sql quary if there is conditions
        $i = 0;
        foreach($conditions as $key => $value){
            if($i === 0){
                // for the first condition
                $sql = $sql. " WHERE $key=?";
            }else{
                //for the second condtion
                $sql = $sql." AND $key=?";
            }
            
$i++;


        }
      
       //executing the perare statement   
    $stmt = executeQuery($sql,$conditions);
       $records = $stmt->get_result()-> fetch_all(MYSQLI_ASSOC);
       return $records;
    }
    

}

function selectOne ($table,  $conditions){
    global $conn;

    $sql = "SELECT * FROM  $table";
   
   
        // formatting sql quary if there is conditions
        $i = 0;
        foreach($conditions as $key => $value){
            if($i === 0){
                // for the first condition
                $sql = $sql. " WHERE $key=?";
            }else{
                //for the second condtion
                $sql = $sql." AND $key=?";
            }
            
$i++;


        }
      
       //executing the perare statement

       $sql = $sql. " LIMIT 1";
    $stmt = executeQuery($sql,$conditions);
       $records = $stmt->get_result()-> fetch_assoc();
       return $records;
    
    

}




// creating a function to create posts


function create($table,$data){
    global $conn;

    $sql = "INSERT INTO  posts SET ";

$i = 0;
foreach ($data as $key => $value){
if($i === 0){
$sql = $sql . " $key=?";
}else{
    $sql = $sql . ", $key=?";
}
$i++;
}
$stmt = executeQuery($sql,$data);
$id = $stmt ->insert_id;
return $id;

}

$data = [
    'postTitle' =>'coucou',
    'postChapo' => 'cscswijitha',
    'postContent' => 'jkhdlzhfjhlf',
    'postImage' => 'image',
   
    
];

$id = selectOne ('posts',$data);
Ptr( $id);

