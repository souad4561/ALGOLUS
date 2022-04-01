<?php
//include("../configuration/configuration.php");


//    insertion d un projet

$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');

if (isset($_POST['ajouter'])) {


    $name = $_POST["nom"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $id_categorie = $_POST["id_categorie"];
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    $path = '../images/project/';
    $tmp = $_FILES['image']['tmp_name'];

    if ($_FILES["image"]["name"] != '' && $_FILES['image']['size'] != 0) {

        if (file_exists($path) == false) {
            echo 1;
            mkdir($path, 0777, true);

        }
    }
    $ext = pathinfo($image)['extension'];
    $nomImage = $path . uniqid("org-") . "." . $ext;
    $ext = strtolower($ext);
    if ($ext != 'svg' && $ext != 'png' && $ext != 'jpg' && $ext != 'jpeg' && $ext != 'ico') {
        echo "format invalid";
    }
    else {
        header('Access-Control-Allow-Origin: *');
        header('Content-type:application/json');
        if (move_uploaded_file($tmp, $nomImage)) {
            echo "enregistrer avec success";
        }
        else {
            echo "erreur";
        }
    }




    $sql = "INSERT INTO `projet`(`nom`,`date`,`description`,`image`,`id_categorie`) VALUES ('$name','$date',
        '$description',' $image','$id_categorie')";


    // use exec() because no results are returned
    $con->exec($sql);
    // insertData($sql,$data=Array());

    header("Location: ../projet.php?cat=200");

}
else {


    header("Location: ../projet.php?cat=400");


}



?>
  

<?php

//suppression

if(isset($_POST['delete']))
{ 
     $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
    $id=$_POST['id_projet'];   
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM projet  WHERE id_projet=$id ";

    // Prepare statement
   // $stmt = $con->prepare($sql);

    // execute the query
    $con->exec($sql);

    // echo a message to say the delete succeeded
    header("Location: ../projet.php");
    echo  "  delete successfully";
    
} 

$con = null;
?>

<?php
//modification
  try {
        if(isset($_POST['update']))
        { 
            $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
            // set the PDO error mode to exception
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $id=$_POST['id_projet']; 
            $id_categorie=$_POST['id_categorie'];  
            $name= $_POST["nom"];
            $date= $_POST["date"];
            $description= $_POST["description"];
            $image=$_FILES["image"]["name"];
            $old_image=$_POST['image_old'];
            $tmp=$_FILES["image"]["tmp_name"];
            $path = '../images/project/';
            $tmp =$_FILES['image']['tmp_name'];
                
                                
                if( $_FILES["image"]["name"] !='' && $_FILES['image']['size']!=0){
                    $update=$_FILES["image"]["name"]; 
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                        
                    }
                
                    $ext = pathinfo($image)['extension'];
                    $nomImage = $path . uniqid("org-") . "." . $ext;
                    $ext = strtolower($ext);
                    if ($ext != 'svg' && $ext != 'png' && $ext != 'jpg' && $ext != 'jpeg' && $ext != 'ico') {
                        echo "format invalid";
                    }else{
                        // header('Access-Control-Allow-Origin: *');
                        //header('Content-type:application/json');
                        if (move_uploaded_file($tmp, $nomImage)) {
                            echo "enregistrer avec success";
                        }else{
                            echo "erreur";
                        }
                    }

                    }else
                    {
                        $update=$old_image;
                    }
            
                    $sql = "UPDATE projet SET nom='$name', date= '$date', description='$description',image='$update', id_categorie=$id_categorie WHERE id_projet=$id;";
                
                    // Prepare statement
                    $stmt = $con->prepare($sql);
                
                    // execute the query
                    $stmt->execute();
                    header("Location: ../projet.php");
                    // echo a message to say the UPDATE succeeded
                    echo $stmt->rowCount() . " records UPDATED successfully";
            
        } 
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

  $con = null;
?>
      

  