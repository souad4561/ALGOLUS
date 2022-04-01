<?php
$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
// set the PDO error mode to exception
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST["submit"]))
{
	$nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$tele = $_POST["telephone"];
	//$cin = $_POST["cin"];
	$datenaiss= $_POST["date"];
    $ville = $_POST["ville"];
    $formation = $_POST["idFormation"];
    $statut = $_POST["statut"];
    $sexe = $_POST["sexe"];
    $niveauEtude = $_POST["niveauEtude"];
    // $titrefor= $_POST["titrefor"];
    $typefor = $_POST["typefor"];

	$sql = "INSERT INTO `etudiants`  ( `nom`, `prenom`, `datenaiss`, `ville`,`tele`, `email` , `niveauEtude`, `statut`, `sexe`, idFormation,typefor)  VALUES 
                                   (  '$nom' , '$prenom' , '$datenaiss', '$ville' ,$tele, '$email', '$niveauEtude', '$statut', '$sexe', $formation,'$typefor')";
 
        // use exec() because no results are returned
        $con->exec($sql); 
	
    header("Location:../inscription.php");
		
}
?>

<?php
$email= $_POST['email'];
$nom = $_POST["nom"];
$to = $_POST['email'];
$subject = "Email Subject";

$message = 'Dear '.$nom.',<br>';
$message .= "Welcome to be part of family<br><br>";
$message .= "Regards,<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$email.''."\r\n";
$headers .= 'Cc:algolus2020@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>