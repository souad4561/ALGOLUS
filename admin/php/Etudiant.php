<?php
$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
// set the PDO error mode to exception
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST["ajouter"]))
{
	$nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$tele = $_POST["tele"];
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
	
    header("Location: ../team-leader.php?cat=200");

}
else {

    header("Location: ../team-leader.php?cat=400");

}



?>
<?php

//refuser

if(isset($_POST['delete']))
{ 

   
     $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
    $id=$_POST['ide'];  
   // $confirm=$_POST['AccepRefus']=0;   
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   
        $sql = "UPDATE etudiants SET AcceptRefus='0' WHERE  ide=$id;";
   
    
    // Prepare statement
   // $stmt = $con->prepare($sql);

    // execute the query
    $con->exec($sql);

    // echo a message to say the delete succeeded
    header("Location: ../team-leader.php");
    echo  "  delete successfully";
    
}

//supprimer

if(isset($_POST['delete']))
{ 

   
     $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
    $id=$_POST['ide'];  
   
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   
        $sql = "DELETE FROM etudiants WHERE  ide=$id;";
   
    
    // Prepare statement
   // $stmt = $con->prepare($sql);

    // execute the query
    $con->exec($sql);

    // echo a message to say the delete succeeded
    header("Location: ../team-leader.php");
    echo  "  delete successfully";
    
}


//accepter

if(isset($_POST['accepte']))
{ 

   
     $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
    $id=$_POST['ide']; 

   // $confirm=$_POST['AccepRefus']=0;   
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   
        $sql = "UPDATE etudiants SET AcceptRefus='1' WHERE  ide=$id;";
   
    
    // Prepare statement
   // $stmt = $con->prepare($sql);

    // execute the query
    $con->exec($sql);

    // echo a message to say the delete succeeded
    header("Location: ../team-leader.php");
    echo  "  accepte successfully";
    
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
        
            $id = $_POST["ide"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $tele = $_POST["tele"];
            //$cin = $_POST["cin"];
            $datenaiss= $_POST["date"];
            $ville = $_POST["ville"];
            $formation = $_POST["idFormation"];
            $statut = $_POST["statut"];
            $sexe = $_POST["sexe"];
            $niveauEtude = $_POST["niveauEtude"];
            $typefor = $_POST["typefor"];
                                                   
                    $sql = "UPDATE etudiants SET nom='$nom', prenom='$prenom',email='$email',tele='$tele' ,datenaiss='$datenaiss', 
                            ville='$ville',idFormation='$formation',statut='$statut',sexe='$sexe',niveauEtude='$niveauEtude' ,typefor='$typefor' 
                            WHERE  ide=$id;";
                           
                
                    // Prepare statement
                    $stmt = $con->prepare($sql);
                    // execute the query
                    $stmt->execute();
                    
                    header("Location: ../gestionEtudiants.php");
                    // echo a message to say the UPDATE succeeded
                    echo $stmt->rowCount() . " records UPDATED successfully";
            
        } 
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

  $con = null;
?>
      


