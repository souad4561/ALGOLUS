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
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Profile </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
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

<div id="mytask-layout" class="theme-indigo">

    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index.php"class="mb-0 brand-icon">
                <span class="logo-icon">
                <img src="assets/images/logo2.png" alt=" " data-width="90" data-height="45" data-retina="assets/images/logo2.png" width="45" height="40">
  
  </span>
  <span class="logo-text">ALGOLUS</span>
            </a>
            <!-- Menu: main ul -->
            <ul class="menu-list flex-grow-1 mt-3">
                
                <li><a class="m-link " href="index.php"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
                </li>

                <li><a class="m-link " href="projet.php"><i class="icofont-ticket"></i> <span>Projets</span></a></li>
                </li>
             
           <li><a class="m-link " href="categoriee.php"><i class="icofont-briefcase"></i> <span>Categories</span></a></li>
                </li>
                <li><a class="m-link active" href="profile.php"><i class="icofont-user-male"></i> <span>Profile</span></a></li>
            </ul>

            <!-- Theme: Switch Theme -->
            <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-switch">
                        <input class="form-check-input" type="checkbox" id="theme-switch">
                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-rtl">
                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                    </div>
                </li>
            </ul>
            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
    
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                       
                        <div class="dropdown notifications zindex-popover">
                          
                            <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                                <div class="card border-0 w380">
                                    <div class="card-header border-0 p-3">
                                        <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                            <span>Notifications</span>
                                            <span class="badge text-white">11</span>
                                        </h5>
                                    </div>
                                    <div class="tab-content card-body">
                                        <div class="tab-pane fade show active">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Dylan Hunter</span> <small>2MIN</small></p>
                                                            <span class="">Added  2021-02-19 my-Task ui/ux Design <span class="badge bg-success">Review</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <div class="avatar rounded-circle no-thumbnail">DF</div>
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Task added Get Started with Fast Cad project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Quality Assurance Task Completed</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Add New Project for App Developemnt</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Add Timesheet For Rhinestone project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                            <span class="">Add Calander Event</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Bonjour <?php  if(isset($_SESSION['user_login'])){ echo $row['Nom']; }?></span></p>
                                <small>Admin Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold"><?php  if(isset($_SESSION['user_login'])){ echo $row['Nom']; }?></span></p>
                                                <small class=""><?php  if(isset($_SESSION['user_login'])){ echo $row['Email']; }?></small>
                                            </div>
                                        </div>
                                        
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
          
                                        <a href="php/deconnexion.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Déconnecter</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>
    
                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        
                    </div>
    
                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card border-0 mb-15 no-bg">
                            <div class="card-header py-3 px-0 d-flex align-items-center  justify-content-between border-bottom">
                                <h3 class=" fw-bold flex-fill mb-0"> Profile</h3>
                              
                            </div>
                        </div>
                    </div>
                </div>
               
 <!-- Row End -->
                <div class="row g-3">
                     <div class="col-xl-8 col-lg-12 col-md-12">
                         <div class="card teacher-card  mb-3 " > 
                            <div class="card-body d-flex teacher-fulldeatil">
                                <div class="profile-teacher pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                    <a href="#">
                                        <img src="assets/images/profile_av.png" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                    </a>
                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                        <h6 class="mb-0 fw-bold d-block fs-6"></h6>
                                        <span class="text-muted small" name="Nom"> <?php  if( isset($_SESSION['user_login'])){ echo $row['Nom']; }?></span>
                                        <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                                            <button type="button"  href="#edittickit_<?= $row['id_user'] ?>" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittickit_<?= $row['id_user'] ?>"><i class="icofont-edit text-success"></i></button>
                                        </div> 
                                    </div>
                                </div>
                                <div class="teacher-info border-start ps-xl-4 ps-md-4 ps-sm-4 ps-4 w-100">
                                    <h6  class="mb-0 mt-2  fw-bold d-block fs-6">Les informations personnelles </h6>
                                    <br> 
                                    <div class="row g-2 pt-2">
                                        <div class="col-xl-5">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-ui-touch-phone"></i>
                                                <span class="ms-2 small">202-555-0174 </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-email"></i>
                                                <span class="ms-2 small"><?php  if(isset($_SESSION['user_login'])){ echo $row['Email']; }?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-birthday-cake"></i>
                                                <span class="ms-2 small">19/03/1980</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-address-book"></i>
                                                <span class="ms-2 small"><?php  if(isset($_SESSION['user_login'])){ echo $row['Adress']; }?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
  
  try {
      if(isset($_POST['update']))
      { 
          $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
          // set the PDO error mode to exception
          $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
          $id=$_POST['id_user']; 
          $name=$_POST['Nom']; 
          $Adress=$_POST['Adress'];
          $email=$_POST['Email'];
          $password=$_POST['password'];
          $confirm_password=$_POST['confirm_password'];
          if($password == $confirm_password ){

                         $sql = "UPDATE user SET nom='$name', Adress= '$Adress', Email='$email', password=$password WHERE id_user=$id";
                    
                        // Prepare statement
                        $stmt = $con->prepare($sql);
                    
                        // execute the query
                        $stmt->execute();
                    
                        // echo a message to say the UPDATE succeeded
                        ?>
              <div class="alert alert-success" role="alert">
                                    Modifier avec succées! 
                              </div>
                              <?php
          }else{
              ?>
              <div class="alert alert-danger" role="alert">
                                    Erreur en Mot de passe !!
                              </div>
                              <?php
          }
          
  } 
} catch(PDOException $e) {
   echo $sql . "<br>" . $e->getMessage();
}

$con = null;


?>
   
                <div class="modal fade" id="edittickit_<?= $row['id_user'] ?>" tabindex="-1"  aria-hidden="true">
                                    
                        <div class="modal-dialog modal-dialog-centered modal-md  ">
                            <div class="modal-content">
                                        <div class="modal-header">
    
                                            <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Modifier Profile</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                
                                    <form enctype="multipart/form-data" action=""  method="post">
                                      <div class="modal-body" >
                                            <div class="mb-3">  
                                            <input type="hidden" class="form-control" id="exampleFormControlInput77" name="id_user" value="<?= $row['id_user']  ?>">
                                            </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput77" class="form-label">Nom </label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput77" name="Nom" placeholder="Nom " value="<?= $row['Nom']  ?>">
                                                </div>
                                          
                                            <div class="col">
                                                <label for="datepickerded" class="form-label"> Adress</label>
                                                <input type="text" class="form-control"  name="Adress" value="<?= $row['Adress']  ?>" id="Adress">
                                            </div>
                                                <div class="mb-3"> 
                                                    <label for="exampleFormControlTextarea78" class="form-label">Email </label>
                                                    <input type="Email" class="form-control"  name="Email" value="<?= $row['Email']  ?>" id="Email">

                                                </div>
                                                <div class="mb-3"> 
                                                    <label for="exampleFormControlTextarea78" class="form-label">Mot de passe </label>
                                                    <input type="text"   class="form-control"  name="password"  value="<?= $row['password']  ?>" id="password" placeholder="Mot de passe ">
                                                    <input type="hidden" class="form-control"  name="old_password" value="<?= $row['password']  ?>" id="password" placeholder="Mot de passe ">

                                                </div>
                                                <div class="mb-3"> 
                                                    <label for="exampleFormControlTextarea78" class="form-label">Confirmez Mot de passe </label>
                                                    <input type="text"   class="form-control"  value="<?= $row['password']  ?>"  name="confirm_password" value="" id="confirm_password" placeholder="Confirmer Mot de passe">
                                                 </div>
                                                
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                <button type="submit"  name="update" value="update" class="btn btn-primary"> modifier</button>
                                            
                                        
                                      </form>   
                                      </div>
                                    </div>
                                </div>
                            </div>
                
                    
                 



<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="js/template.js"></script>
<script>
     // project data table
     $(document).ready(function() {
        $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    });
</script>
</body>
</html>