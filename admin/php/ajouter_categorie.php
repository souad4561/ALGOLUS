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

   <!-- selection d un categorie -->
 <?php



// $sql = "SELECT id_categorie, nom_categorie  FROM categorie";

// echo "<table style='border: solid 1px black;'>";
// echo "<tr><th>Id</th><th>Categorie</th></tr>";

//         class TableRows extends RecursiveIteratorIterator {
//         function __construct($it) {
//             parent::__construct($it, self::LEAVES_ONLY);
//         }

//         function current() {
//             return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
//         }

//         function beginChildren() {
//             echo "<tr>";
//         }

//         function endChildren() {
//             echo "</tr>" . "\n";
//         }
//         }


//         try {
//             $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
//             $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             $stmt = $con->prepare($sql);
//             $stmt->execute();

//         // set the resulting array to associative
//         $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//         foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//             echo $v;
//         }
//         } catch(PDOException $e) {
//         echo "Error: " . $e->getMessage();
//         }
//         $conn = null;
//         echo "</table>";
?>
<!-- update categorie -->
<?php

// try {
//         $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
//         // set the PDO error mode to exception
//         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

//         // Prepare statement
//         $stmt = $con->prepare($sql);

//         // execute the query
//         $stmt->execute();

//         // echo a message to say the UPDATE succeeded
//         echo $stmt->rowCount() . " records UPDATED successfully";
//     } catch(PDOException $e) {
//         echo $sql . "<br>" . $e->getMessage();
//     }

//     $conn = null;
?>

  <!-- delete categorie -->

<?php



// try { 
//     $name= $_POST["supprimer"];

//     if(isset($name) )
//     {
//     $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
//     // set the PDO error mode to exception
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//     // sql to delete a record
//     $sql = "DELETE FROM categorie where id_categorie=60 ";


//     // use exec() because no results are returned
//     $con->exec($sql);
//     echo "deleted successfully";
//     }
//   } catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
//   }


//   $conn = null;



?>



<?php
session_start();


// if(isset($_POST['submit_modifier'])){

//     $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
//             // set the PDO error mode to exception
//             $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 	try{
// 		$id = $_GET['id_categorie'];
// 		$name = $_POST['nom_categorie'];


// 		$sql = "UPDATE categorie SET nom_categorie ='$name' WHERE id_categorie = '$id'";
// 		//if-else statement in executing our query
// 		$_SESSION['message'] = ( $db->exec($sql) ) ? 'Member updated successfully' : 'Something went wrong. Cannot update member';

// 	}
//     catch(PDOException $e) {
//         $_SESSION['message'] = $e->getMessage();
//           }

// 	//close connection
//     $conn = null;
// }

// header('location:../projects.php');


?>


















