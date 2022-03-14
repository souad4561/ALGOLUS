<?php
if(isset($_POST['submit'])){

$mailForm=$_POST['email'];


$mailTo="contact@algolus.com";
$headers="Form :".$mailForm;
 
mail($mailTo,$subject,$txt,$headers,$phone);
header("Location: contact.php?mailsend");
}
?>