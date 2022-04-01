<?php
$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
// set the PDO error mode to exception
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST["submit"]))
{
	$nom = $_POST["nom"];
	$mail = $_POST["email"];
	$tele = $_POST["telephone"];
	$sujet = $_POST["sujet"];
	$msg = $_POST["msg"];

	$sql = "INSERT INTO `contact`(`nom`,`email`,`telephone`,`sujet`,`msg`) VALUES ('$nom','$mail',$tele,'$sujet','$msg');";

        // use exec() because no results are returned
        $con->exec($sql); 
		header("Location:../contact.php");
		
}
?>

<?php
$address = "algolus2020@gmail.com";
if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$error = false;
$fields = array( 'name', 'email', 'subject', 'message','phone' );

foreach ( $fields as $field ) {
	if ( empty($_POST[$field]) || trim($_POST[$field]) == '' )
		$error = true;
}

if ( !$error ) {

	$name = $_POST["nom"];
	$email = $_POST["email"];
	$phone = $_POST["telephone"];
	$subject = $_POST["sujet"];
	$message = $_POST["msg"];

	$e_subject = 'You\'ve been contacted by ' . $name . '.';
	

	// Configuration option.
	// You can change this if you feel that you need to.
	// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

	$e_body = "You have been contacted by: $name" . PHP_EOL . PHP_EOL;
	$e_reply = "E-mail: $email" . PHP_EOL . PHP_EOL;
	$e_content = "Message:\r\n$subject \r\n$message \r\n Phone: $phone" . PHP_EOL;
	

	$msg = wordwrap( $e_body . $e_reply , 70 );
    
	$headers = "From: $email" . PHP_EOL;
	$headers .= "Reply-To: $email" . PHP_EOL;
	$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
	$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

	if(mail($address, $msg, $headers, $e_content  )) {

		// Email has sent successfully, echo a success page.
	
		echo 'Success';

	} else {

		echo 'ERROR!';

	}

}

?>