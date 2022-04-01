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
    <title>Algolus </title>
    <link rel="icon" href="favicon.png" type="image/x-icon"> <!-- Favicon-->
    
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">
</head>
<body>

<div id="mytask-layout" class="theme-indigo">
    
    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index.php" class="mb-0 brand-icon">
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
             
                
                <li><a class="m-link active " href="categoriee.php"><i class="icofont-briefcase"></i> <span>Categories</span></a></li>
                </li>
                <li><a class="m-link " href="profile.php"><i class="icofont-user-male"></i> <span>Profile</span></a></li>
                <li><a class="m-link " href="contact.php"><i class="icofont-users-alt-5"></i> <span>Contact</span></a></li>
                <a class="m-link " data-bs-toggle="collapse" data-bs-target="#app-Components" href="#">
                    <i class="icofont-contrast"></i> <span>App-Académie</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse show" id="app-Components">
                    <li><a class="ms-link  " href="gestion-formation.php"> <span>Gestion des Formations </span></a></li>
                    <li><a class="ms-link " href="gestionEtudiants.php"><span>Gestion des Etudiant</span></a></li>
                </ul>
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
                        <!-- <div class="d-flex">
                            <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                                <i class="icofont-info-square fs-5"></i>
                            </a>
                            <div class="avatar-list avatar-list-stacked px-3">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                            </div>
                        </div> -->
                        <div class="dropdown notifications zindex-popover">
                            <!-- <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="icofont-alarm fs-5"></i>
                                <span class="pulse-ring"></span>
                            </a> -->
                            <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                               
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
                                            <img class="avatar rounded-circle sm" src="assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold"><?php  if(isset($_SESSION['user_login'])){ echo $row['Nom']; }?></span></p>
                                                <small class=""><?php  if(isset($_SESSION['user_login'])){ echo $row['Email']; }?></small> 
                                             </div>
                                        </div>
                                        
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <!-- <a href="task.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-tasks fs-5 me-3"></i>My Task</a>
                                        <a href="members.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user-group fs-6 me-3"></i>members</a> -->
                                        <a href="php/deconnexion.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Déconnecter</a>
                                        <!-- <div><hr class="dropdown-divider border-dark"></div>
                                        <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a> -->
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
                        <!-- <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                        </div> -->
                    </div>
    
                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold py-3 mb-0">Categories</h3>
                            <?php
                            use MongoDB\Driver\Session;
                                if(isset($_GET['cat'] )):
                                    if($_GET['cat'] == '200' ):  ?>
                                        <div class="alert alert-success" role="alert">
                                                insert successfully!
                                        </div>
                                        
                            <?php
                                    endif;
                                    
                                endif;

                               
                            ?>
                             <?php
                                if(isset($_GET['cat'] )):
                                    if($_GET['cat'] == '400' ): ?>
                                        <div class="alert alert-danger" role="alert">
                                                insert failed!
                                        </div>
                            <?php
                                    endif;
                                    
                                endif;
                               
                            ?>
                            
                     
                            <div class="d-flex py-2 project-tab flex-wrap w-sm-100">

               <?php 

                     try{ 
                                         $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
                                         $sql="SELECT id_categorie, nom_categorie  FROM categorie";
                                         $q= $con-> query($sql);
                                         $q->setFetchMode(PDO::FETCH_ASSOC);
                            } catch(PDOException $e) {
                                echo $sql . "<br>" . $e->getMessage();
                               }


               ?>
                                
                                <button type="button" class="btn btn-dark w-sm-100" data-bs-toggle="modal" data-bs-target="#createproject"><i class="icofont-plus-circle me-2 fs-6"></i>Ajouter un categorie</button>
                                <!-- <ul class="nav nav-tabs tab-body-header rounded ms-3 prtab-set w-sm-100" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#All-list" role="tab">All</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Started-list" role="tab">Started</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Approval-list" role="tab">Approval</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Completed-list" role="tab">Completed</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->
               
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 flex-column">
                        <div class="tab-content mt-4">
                            <div class="card mb-3">
                               <div class="card-body">

                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                       
                                        <tr>
                                            <th> Id</th>
                                            <th>Nom</th>
                                            <th>Actions</th>  

                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while ($row =$q-> fetch()): ?>
                                         <tr>
                                            
                                            <td>
                                                <?php echo htmlspecialchars($row['id_categorie']) ?>
                                            </td>
                                            <td>
                                            <?php echo htmlspecialchars($row['nom_categorie']) ?>
                                            </td>
                                               
                                             <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                     <button type="button" href="#editproject_<?= $row['id_categorie'] ?>" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#editproject_<?= $row['id_categorie'] ?>"><i class="icofont-edit text-success"></i></button>
                                                     <button type="button" href="#deleteproject_<?= $row['id_categorie'] ?>"   class="btn btn-outline-secondary deleterow" data-bs-toggle="modal" data-bs-target="#deleteproject_<?= $row['id_categorie'] ?>"><i class="icofont-ui-delete text-danger"></i></button>
                                                 </div>
                                             </td>
                                         </tr>

                                    
                                        <div class="modal fade" id="editproject_<?= $row['id_categorie'] ?>"  tabindex="-1"  aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title  fw-bold" id="editprojectLabel"> Modifier un categorie</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="php/ajouter_categorie.php" method="POST">
                                                
                                                        <div class="modal-body">

                                                            <div class="mb-3"> 
                                                            
                                                                <label for="exampleFormControlInput78" class="form-label">id</label>
                                                                <input type="hidden" class="form-control" name="id_categorie" value="<?= $row['id_categorie']  ?>">

                                                                <label for="exampleFormControlInput78" class="form-label">Nom</label>                       
                                                                <input type="text" class="form-control" name="nom_categorie" value=" <?= $row['nom_categorie'] ?>">
                                                                
                                                            
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                            <button type="submit" name="update" value="update" class="btn btn-primary">Modifier</button>
                                                        </div>
                                                    
                                                </form>
                                            </div>
                                            </div>
                                        </div> 
                                     
                                
              <!-- Modal  Delete Folder/ File-->
              
                                <div class="modal fade" id="deleteproject_<?= $row['id_categorie'] ?>" tabindex="-1"  aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-md ">
                                    <div class="modal-content">
                                   
                                    <form action="php/ajouter_categorie.php" method="post">

                                        <div class="modal-header">
                                            <h5 class="modal-title  fw-bold" id="deleteprojectLabel">Supprimer l’élément?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body justify-content-center flex-column d-flex">
                                            <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                                            <input type="hidden" class="form-control" name="id_categorie" value="<?= $row['id_categorie']  ?>">
                                            <p class="mt-4 fs-5 text-center">Supprimer</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" name="delete" value="delete"  class="btn btn-danger color-fff" >Supprimer</button>

                                        </div>
                                    </form>    
                                    </div>
                                    </div>
                                </div> <?php endwhile; ?>   
                            </div>
                        </div>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <!-- Modal Members-->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="addUserLabel">Employee Invitation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="inviteby_email">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="exampleInputEmail1">
                            <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                        </div>
                    </div>
                    <div class="members_list">
                        <h6 class="fw-bold ">Employee </h6>
                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                        <span class="text-muted">rachel.carr@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <span class="members-role ">Admin</span>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
                                        <span class="text-muted">lucas.baker@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>
                                                      
                                                    <span>All operations permission</span>
                                                   </a>
                                                   
                                                </li>
                                                <li>
                                                     <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                           <span>Only Invite & manage team</span>
                                                       </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Una Coleman</h6>
                                        <span class="text-muted">una.coleman@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>
                                                      
                                                    <span>All operations permission</span>
                                                   </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                           <span>Only Invite & manage team</span>
                                                       </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icofont-ui-settings  fs-6"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>

      
       <!-- <div class="container">
        <form action="#" method="POST">
            <input type="text" name="nom-categorie" value=""/>
            
            <button type="submit" name="submit" class="btn btn-primary">click</button>
        </form>
     </div> -->


        <!-- ajouter un categorie-->
       
         

        <div class="modal fade" id="createproject" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Ajouter un categorie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               <form action="php/ajouter_categorie.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput77" class="form-label">Nom de categorie</label>
                        <input type="text" class="form-control" name="nom_categorie" value=""  placeholder="Nom">
                    </div>
                    
                         
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
                </div>
                </form>
            </div>
            </div>
        </div>
 
        <!-- Edit Project-->
     


 <?php
      
        try{ 
            $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
            $sql="SELECT *  FROM categorie";
            $q= $con-> query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
            while ($row =$q-> fetch()){

                $name = $row['nom_categorie'];
                $id = $row['id_categorie'];
            }
         
         
        } catch(PDOException $e) {
             echo $sql . "<br>" . $e->getMessage();
        }


?>

      
            </div>
            </div>
        </div>
    </div>
</div> 

      
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="js/template.js"></script>

</body>
</html>