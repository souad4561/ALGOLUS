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
    $path = '../ images/project/';
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
  