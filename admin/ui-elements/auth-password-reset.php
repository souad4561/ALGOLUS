<?php
include("function.php");
$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
if (isset($_POST['send_link'])) 
{
    $Email = $_POST['Email'];
    //check if email exist in db
    $query = $con->prepare('SELECT * FROM user WHERE Email= ?');
    $query->execute([$Email]);
    $row = $query->rowCount();

    if ($row == 1) {

        //generate code
        $code = generateRandomString();
        //formulate a link 
        $link = 'href="http://localhost/saku-package/Saku/admin/ui-elements/reset_password.php?email=' . $Email . '&code=' . $code . '"';
        $link2 = '<span style="width:100% " ><a style="padding:10px 100px;  border-radius:30px; background-color:#0A3D89; color:white; " ' . $link . ' >Link</a></span>';

        //retreive data from reset table
        $query_reset = $con->prepare('SELECT * FROM reset INNER JOIN user ON reset.id_user=user.id_user WHERE Email=?;');
        $query_reset->execute([$Email]);
        $form_reset = $query_reset->fetch();


        if (!empty($form_reset)) {
            //save info in  reset table
            $query_insert_reset = $con->prepare('UPDATE reset INNER JOIN user ON reset.id_user=user.id_user SET code=?  WHERE Email=?;');
            $query_insert_reset->execute([$code, $Email]);
        }


        //formulate and send email
        $from = 'algolus@gmail.com';
        $to = $Email;
        $subject = 'reset password from algolus';
        $message =
            ' <p>Dear ' . $Email . ',</p>
        <p>please Click on this link to reset your password:</p>
        <p>' . $link2 . '</p>';
        //set content-type when sending HTML email
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From:' . $from . "\r\n";

        mail($to, $subject, $message, $headers);
        //success sending email
        $msg = 'success sending email';
    }
    else {
        $error = 'email does not exist';
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
                            <form class="row g-1 p-3 p-md-4" method="post" action="reset_password.php">
                                <div class="col-12 text-center mb-1 mb-lg-5">
                                    <img src="../assets/images/forgot-password.svg" class="w240 mb-4" alt="" />
                                    <h1>Mot de passe oublié?</h1>
                                    <span>Entrez l’adresse e-mail que vous avez utilisée lors de votre inscription et nous vous enverrons des instructions pour réinitialiser votre mot de passe.</span>
                                    <?php if (isset($msg)) {
    echo $msg;
}?>
                                    <?php if (isset($error)) {
    echo $error;
}?>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email</label>
                                        <input type="email" required class="form-control form-control-lg"  name="Email" placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <input type="submit"  value="Envoyer" name="send_link"  class="btn btn-lg btn-block btn-light lift text-uppercase"/>
                                    
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