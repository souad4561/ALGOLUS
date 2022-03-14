<?php 


function connexion()
{
    global $con;
    try {
        $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
         echo 1;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
      
    }
    return $con;
    
}



function insertData($sql, $data=Array() )
{ 
    $db= connexion();
    $query =  $db->prepare($sql);
    return $query->execute($data);

 }
 

function selectData($sql,)
{

    $db = connexion();
    $query =  $db->prepare($sql);
    return $query->execute();
}

function selectoneData()
{
   
    
}

function updateData()
{

    
}
?>

