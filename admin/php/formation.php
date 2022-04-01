<?php


   //insertion d une formation

$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');

if (isset($_POST['ajouter'])) {


    $id = $_POST["idf"];
    $titre = $_POST["titrefor"];
    $description = $_POST["descriptionfor"];
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    $path = '../images/services/';
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




    $sql = "INSERT INTO `formations`(`titrefor`,`descriptionfor`,`image`) VALUES (' $titre', '$description',' $image')";


    // use exec() because no results are returned
    $con->exec($sql);
    // insertData($sql,$data=Array());

    header("Location: ../gestion-formation.php?cat=200");

}
else {


    header("Location: ../gestion-formation.php?cat=400");


}



?>
<?php

//suppression

if(isset($_POST['delete']))
{ 
     $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
    $id=$_POST['idf'];   
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM formations  WHERE idf=$id ";

    // Prepare statement
   // $stmt = $con->prepare($sql);

    // execute the query
    $con->exec($sql);

    // echo a message to say the delete succeeded
    header("Location: ../gestion-formation.php");
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
        
            $id = $_POST["idf"];
            $titre = $_POST["titrefor"];
            $description = $_POST["descriptionfor"];
            $image = $_FILES["image"]["name"];
            $old_image=$_POST['image_old'];
            // $image = $_FILES["image"]["name"];
            $tmp = $_FILES["image"]["tmp_name"];
            $path ='../images/services/';
            
                  
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
                        header('Access-Control-Allow-Origin: *');
                        header('Content-type:application/json');
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
                   
                    $sql = "UPDATE formations SET titrefor='$titre', descriptionfor='$description',image='$update'  WHERE  idf=$id;";
                
                    // Prepare statement
                    $stmt = $con->prepare($sql);
                
                    // execute the query
                    $stmt->execute();
                    header("Location: ../gestion-formation.php");
                    // echo a message to say the UPDATE succeeded
                    echo $stmt->rowCount() . " records UPDATED successfully";
            
        } 
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

  $con = null;
?>
      

