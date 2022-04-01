<?php
include("../configuration/configuration.php");


//    insertion d un categorie


$name = $_POST["nom_categorie"];
$sql = "INSERT INTO `categorie`(`nom_categorie`) VALUES ('$name')";
$data = "";

if (isset($name) && !empty($name)) {
    echo '1';
    $con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
    //     // set the PDO error mode to exception
    //    // $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     // use exec() because no results are returned
    //     $con->exec($sql); 


    insertData($sql, $data = array());
    echo '2';
    header("Location: ../categoriee.php?cat=200");
// $message = "insert success ";
// echo "<script type='text/javascript'>alert('$message');</script>";


}
else {
    //  $message = "insert failed ";

    header("Location:../categoriee.php?cat=400");


}


?>

<?php
//supprimer
try {
    if(isset($_POST['delete']))
    { 
        
        $id=$_POST['id_categorie'];   
        
        $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "DELETE FROM categorie  WHERE id_categorie=$id ";
        // execute the query
      
       $con->exec($sql);

        // echo a message to say the delete succeeded
        
    header("Location:../categoriee.php?cat=200");
        
} else{
  header("Location:../categoriee.php?cat=400");
}
} catch(PDOException $e) {
 echo $sql . "<br>" . $e->getMessage();

}

$con = null;
?>

<?php
 //modifier 
    try {
        if(isset($_POST['update']))
        { 
          $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
          // set the PDO error mode to exception
          //$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $id=$_POST['id_categorie'];   
          $name= $_POST["nom_categorie"];
            
            
        
            $sql = "UPDATE categorie SET nom_categorie='$name' WHERE id_categorie=$id ";
        
          
            // Prepare statement
                $stmt = $con->prepare($sql);
                
            // execute the query
            $stmt->execute();
          
    } 
 } catch(PDOException $e) {
     echo $sql . "<br>" . $e->getMessage();
 }
 
 $con = null;
 ?>













