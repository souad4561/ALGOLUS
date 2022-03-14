<?php

 $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
 session_start();
 if(isset($_GET['Email']) && isset($_GET['code']))
{
$_SESSION['Email']=$_GET['Email'];

$code=$_GET['code'];
$link='href="http://localhost/saku-package/Saku/admin/ui-elements/reset_password.php?email='.$Email.'&code='.$code.'"';
$link2='<span style="width:100% " ><a style="padding:10px 100px;  border-radius:30px; background-color:#0A3D89; color:white; " '.$link.' >Link</a></span>';
echo $link2;
var_dump($link);

  $query=$con->prepare('SELECT * FROM reset INNER JOIN user ON reset.id_user=user.id_user WHERE Email=?');
   $query->execute([$_SESSION['Email']]);
   $from_reset=$query->fetch();
echo $from_reset;
  if($code != $from_reset['code']){
   $expired='sorry,your link is invalid '; 

  }

}


 ?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Algolus</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="../assets/css/my-task.style.min.css">
</head>

<body>

<div id="mytask-layout" class="theme-indigo">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5">
        
        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            
                            <div class="mb-5">
                            <h2 class="color-900 text-center"> Rendons votre site Web meilleur avec Algolus</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="../assets/images/login-img.svg" alt="login-img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <?php 
                            if(!isset($expired) && isset($_GET['code']))
                            { echo '';
                            }
                             ?>
                                    <form class="row g-1 p-3 p-md-4" method="post" action="">
                                        <div class="col-12 text-center mb-1 mb-lg-5">
                                            <img src="../assets/images/forgot-password.svg" class="w240 mb-4" alt="" />
                                            <h1>Réinitialiser votre mot de passe</h1>
                                            <span>Veuillez entrer votre nouveau mot de passe </span>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Mot de passe</label>
                                                <input type="password"   name="password1"   class="form-control form-control-lg" placeholder="Nouveau mot de passe" >
                                            </div>
                                            <div class="mb-2">
                                                <input type="password"   name="password2"   class="form-control form-control-lg" placeholder="Répéter nouveau mot de passe" >

                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <input type="submit"  value="Rénitialiser " name="reset_password"  class="btn btn-lg btn-block btn-light lift text-uppercase"/>
                                            
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <!-- <span class="text-muted"><a href="auth-signin.html" class="text-secondary">Back to Sign in</a></span> -->
                                        </div> 
                                        </form>
                      
                            <!-- End Form -->
                            
                        </div>
                    </div>
                </div> <!-- End Row -->
                
            </div>
        </div>

    </div>

</div>

<!-- Jquery Core Js -->
<script src="../assets/bundles/libscripts.bundle.js"></script>

</body>
</html>