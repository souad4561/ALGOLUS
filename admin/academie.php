<?php
$con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
session_start();

if(!isset($_SESSION["user_login"]))
{
 header("location:ui-elements/auth-signin.php");
}

$id=$_SESSION['user_login'];
$statement=$con->prepare("SELECT * FROM user WHERE :id");
$statement->execute(array(':id'=>$id));

$row=$statement->fetch(PDO::FETCH_ASSOC);

?>
<?php header("location:gestion-formation.php") ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Profile </title>
    <link rel="icon" href="favicon.png" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/nestable/jquery-nestable.css"/>
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">
    <style>
    webkit-scrollbar-thumb
    {
       background-image:linear-gradient(#20bcf2);
    }
</style>
</head>
<body>

</body>
</html>