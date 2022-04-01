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


<!DOCTYPE html >
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Algolus</title>
    <link rel="icon" href="favicon.png" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
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

                <li><a class="m-link  " href="projet.php"><i class="icofont-ticket"></i> <span>Projets</span></a></li>
                </li>
             
                <li><a class="m-link " href="categoriee.php"><i class="icofont-briefcase"></i> <span>Categories</span></a></li>
                </li>
                
                <li><a class="m-link " href="profile.php"><i class="icofont-user-male"></i> <span>Profile</span></a></li>
                <li><a class="m-link " href="contact.php"><i class="icofont-users-alt-5"></i> <span>Contact</span></a></li>
                <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#app-Components" href="#">
                    <i class="icofont-contrast"></i> <span>App-Académie</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse show" id="app-Components">
                    <li><a class="ms-link" href="gestion-formation.php"> <span>Gestion des Formations </span></a></li>
                    <li><a class="ms-link active" href="gestionEtudiants.php"><span>Gestion des Etudiant</span></a></li>
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

<div class="dropdown notifications zindex-popover">
    <!-- <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
        <i class="icofont-alarm fs-5"></i>
        <span class="pulse-ring"></span>
    </a> -->
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
                                <p class="mb-0"><span class="font-weight-bold">Bonjour <?php  if(isset($_SESSION['user_login'])){ echo $row['Nom']; }?></span></p>
                                <small class=""><?php  if(isset($_SESSION['user_login'])){ echo $row['Email']; }?></small> 
                            
                                <!-- <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p> -->
                                
                            </div>
                        </div>
                        
                        <div><hr class="dropdown-divider border-dark"></div>
                    </div>
                    <div class="list-group m-2 ">
                        <a href="php/deconnexion.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Déconnecter</a>
                        <!-- <div><hr class="dropdown-divider border-dark"></div> -->
                        <!-- <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a> -->
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
                    <div class="input-group flex-nowrap input-group-lg">
                        <!-- <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                        <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                        <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button> -->
                    </div>
                </div>

            </div>
        </nav>
    </div>

        <!-- Body: Body -->       
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Etudiants</h3>
                            <?php
    if(isset($_GET['cat'] )):
        if($_GET['cat'] == '200' ):  ?>
            <div class="alert alert-success" role="alert">
                    insertion avec  succées!
            </div>
            

<?php
    elseif(isset($_GET['cat'] )):
        elseif($_GET['cat'] == '400' ): ?>
            <div class="alert alert-danger" role="alert">
                    insert failed!
            </div>
<?php
        endif;
    endif;
?>

                            
<?php 

    try{  
            
            $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
            $sql="SELECT * ,titrefor FROM `etudiants`  INNER JOIN formations on etudiants.idFormation=formations.idf;";
            
            $s= $con-> query($sql);
            $s->setFetchMode(PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
?>
                     
            <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#createproject"><i class="icofont-plus-circle me-2 fs-6"></i>Ajouter un Etudiant</button>
            </div>
                <div class="row clearfix g-3">
                  <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Date de Naissance</th>
                                            <th>ville</th>
                                            <th>Télé</th>
                                            <th>Email</th>
                                            <th>Niveau d'étude</th>
                                            <th>Statut</th>
                                            <th>Sexe</th>
                                            <th>Nom de Formation </th>
                                            <th>Type de Formation</th>
                                            <th>Actions</th>  
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <?php while ($row =$s-> fetch()): ?>
                                        <tr>
                                       
                                           <td>
                                               <span class="fw-bold ms-1"><?php echo htmlspecialchars($row['nom'])?></span>
                                           </td>
                                           <td>
                                           <?php echo htmlspecialchars($row['prenom'])?>
                                           </td>
                                           
                                           <td>
                                           <?php echo htmlspecialchars($row['datenaiss'])?>
                                           </td>
                                           <td>
                                           <?php echo htmlspecialchars($row['ville'])?>
                                           </td>
                                           <td>
                                           <?php echo htmlspecialchars($row['tele'])?>
                                                
                                           </td>
                                           <td>
                                           <?php echo htmlspecialchars($row['email'])?>
                                           </td>
                                           <td>
                                                <span class="badge rounded-pill bg-primary"><?php echo htmlspecialchars($row['niveauEtude'])?></span>
                                           </td>
                                           <td>
                                                <span class="badge rounded-pill bg-warning text-dark"><?php echo htmlspecialchars($row['statut'])?></span>
                                           </td>
                                           <td>
                                                <span class="badge rounded-pill bg-info text-dark"><?php echo htmlspecialchars($row['sexe'])?></span>
                                           </td>
                                           <td>
                                           <span class="badge rounded-pill bg-dark"> <?php echo htmlspecialchars($row['titrefor'])?></span>
                                           </td>
                                           <td>
                                           <span class="badge rounded-pill bg-success"><?php echo htmlspecialchars($row['typefor'])?></span>
                                           </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" href="#edittickit_<?= $row['ide'] ?>" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittickit_<?= $row['ide'] ?>"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" href="#deletetickit1_<?= $row['ide'] ?>"  class="btn btn-outline-secondary deleterow" data-bs-toggle="modal" data-bs-target="#deletetickit1_<?= $row['ide'] ?>" ><i class="icofont-ui-delete text-danger"></i></button>
                                                    <button type="button" href="#deletetickit_<?= $row['ide'] ?>"  class="btn btn-outline-secondary deleterow" data-bs-toggle="modal" data-bs-target="#deletetickit_<?= $row['ide'] ?>" ><i class="icofont-close-circled text-danger"></i></button>
                                                    <button type="button" href="#leaveapprove_<?= $row['ide'] ?>" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#leaveapprove_<?= $row['ide'] ?>"><i class="icofont-check-circled text-success"></i></button>

                                                  </div>
                                            </td>
                                        </tr> 
         <!-- Model accept-->
        <div class="modal fade" id="leaveapprove_<?= $row['ide'] ?>" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
            <form action="php/Etudiant.php" method="post">
                <div class="modal-header">

                    <h5 class="modal-title  fw-bold" id="dremovetaskLabel"> Accepter Etudiant</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center flex-column d-flex">
                <input type="hidden" class="form-control" name="ide" value="<?= $row['ide']  ?>">
                    <i class="icofont-simple-smile text-success display-2 text-center mt-2"></i>
                    <p class="mt-4 fs-5 text-center">Accepter Etudiant avec succés</p>
                    <div class="modal-footer ">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" name="accepte" value="accepte"  class="btn btn-success color-fff" >Accepter</button>
                            </div>

                </div>
              </form>
            </div>
            </div>
        </div> 

                                       
  <!-- Modal refuser -->

        <div class="modal fade" id="deletetickit_<?= $row['ide'] ?>" tabindex="-1"  aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-md ">
                <div class="modal-content">
                    <form action="php/Etudiant.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title  fw-bold" id="deleteprojectLabel">Refuser cette Etudiant</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body justify-content-center flex-column d-flex">
                            <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                            <input type="hidden" class="form-control" name="ide" value="<?= $row['ide']  ?>">
                            <!-- <input type="text" class="form-control" name="AcceptRefus" value=" "> -->
                            <p class="mt-4 fs-5 text-center">Refuser</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" name="delete" value="delete"  class="btn btn-danger color-fff" >Refuser</button>
                            </div>
                    </form>    
                </div>
            </div>
        </div>   
    </div>
    <!-- Modal Delete -->

    <div class="modal fade" id="deletetickit1_<?= $row['ide'] ?>" tabindex="-1"  aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-md ">
                <div class="modal-content">
                    <form action="php/Etudiant.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title  fw-bold" id="deleteprojectLabel">Refuser cette Etudiant</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body justify-content-center flex-column d-flex">
                            <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                            <input type="hidden" class="form-control" name="ide" value="<?= $row['ide']  ?>">
                            <!-- <input type="text" class="form-control" name="AcceptRefus" value=" "> -->
                            <p class="mt-4 fs-5 text-center">Supprimer</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" name="delete" value="delete"  class="btn btn-danger color-fff" >Supprimer</button>
                            </div>
                    </form>    
                </div>
            </div>
        </div>   
    </div>
    <?php
     
        $con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
        
	    $sql = "SELECT   idf,titrefor FROM `formations`;";

        // use exec() because no results are returned
        
        $q= $con-> query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
      

		
?>
<!-- Model Edit-->
<div class="modal fade" id="edittickit_<?= $row['ide'] ?>" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md ">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Modifier les informations d'étudiant</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data"  action="php/Etudiant.php" method="post">
            <div class="modal-body">
                <div class="mb-3">  
                    <input type="hidden" class="form-control" id="exampleFormControlInput77" name="ide" value="<?= $row['ide']  ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Nom </label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" name="nom" value="<?= $row['nom']  ?>"  placeholder="Nom de formation">
                </div>
                
                    <div class="mb-3"> 
                         <label for="exampleFormControlInput77" class="form-label">Prénom </label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" name="prenom" value="<?= $row['prenom']  ?>"  placeholder="Nom ">
                  </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" name="email" value="<?= $row['email']  ?>"  placeholder="Prénom">
                
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Téléphone</label>
                    <input type="number" class="form-control" id="exampleFormControlInput77" name="tele" value="<?= $row['tele']  ?>"  placeholder="Télé">
                
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Date de naissance</label>
                    <input type="date" class="form-control" id="exampleFormControlInput77" name="date" value="<?= $row['datenaiss']  ?>"  placeholder="date">
                
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" name="ville" value="<?= $row['ville']  ?>"  placeholder="Ville">
                
                </div>
                <div class="mb-3">
                    <label  for="exampleFormControlInput77" class="form-label">Statut</label>
                    <select  class="form-select" name="statut" id="etat" onChange=showHide()>
                                    <option  disabled >statut</option>
                                    <option <?php if( $row['statut']=='Etudiant'){ echo 'selected';}?> value="0" >Etudiant</option>
                                    <option <?php if( $row['statut']=='Employée'){ echo 'selected';}?> value="1">Employée</option>
                     </select>
                </div>
                <div  name="hidden-panel" id="hidden-panel">
                            <div class="mb-3">
                                    <label  for="exampleFormControlInput77" class="form-label" >Nom de poste : </label >
                                    <input type="text"class="form-control" id="exampleFormControlInput77"  name="poste"  value="" class="poste" placeholder="Nom de poste:">
                            </div>
                            <div class="mb-3">
                                    <label  for="exampleFormControlInput77" class="form-label"  >Nom d'Entreprise : </label >
                                    <input type="text"  class="form-control" id="exampleFormControlInput77"  name="entreprise"  value="" class="poste" placeholder="Nom d'Entreprise:">
                            </div>
                    </div>
                     <div class="mb-3">
                
                <input type="radio" <?php if( $row['sexe']=='femme'){ echo 'checked';}?>  name="sexe" value="femme"  >femme 
                <input type="radio" <?php if( $row['sexe']=='homme'){ echo 'checked';}?> name="sexe" value="homme"  >homme
       
  </div>
  <div class="mb-3">
                 <label class="form-label" > Niveau Etude </label>
                              <select class="form-select" name="niveauEtude">
                                    <option value="" disabled >Niveau Etude</option>
                                    <option value="Je vous pas sélectionner">Je vous pas sélectionner</option>
                                    <option <?php if( $row['niveauEtude']=='Niveau Bac'){ echo 'selected';}?>value="Niveau Bac">Niveau Bac</option>
                                    <option <?php if( $row['niveauEtude']==' Bac'){ echo 'selected';}?>value="Bac"> Bac</option>
                                    <option <?php if( $row['niveauEtude']=='Bac+2'){ echo 'selected';}?> value="Bac+2">Bac+2</option>
                                    <option <?php if( $row['niveauEtude']=='Bac+3'){ echo 'selected';}?> value="Bac+3">Bac+3</option>
                                    <option <?php if( $row['niveauEtude']=='Bac+5'){ echo 'selected';}?> value="Bac+5">Bac+5</option>
                                    <option <?php if( $row['niveauEtude']=='Autre'){ echo 'selected';}?> value="Autre">Autre</option>

                                    
                                    
                               </select>
                </div> 
                <div class="mb-3">
                        <label for="exampleFormControlInput77" class="form-label">Type de formation</label>
                        <select class="form-select"  name="typefor" >
                            <option disabled >Type de Formation</option> 
                            <option <?php if( $row['typefor']=='A distance'){ echo 'selected'; }?> value="A distance" > A distance </option>
                            <option <?php if( $row['typefor']=='Présentiel'){ echo 'selected'; }?> value="Présentiel"> Présentiel </option>
                              
                            </select> 
                        
                    </div>
               

                <div class="mb-3">
                <label for="exampleFormControlInput77"  class="form-label" > Formations</label >
                            <select class="form-select" name="idFormation" >
                               <option  disabled>Formations</option>
                               <option <?php if( $row['idFormation']=='11'){ echo 'selected'; }?> value="Programmation" >Programmation </option>
                               <option <?php if( $row['idFormation']=='22'){ echo 'selected'; }?> value=" front-end & back-end" > front-end & back-end </option>
                               <option <?php if( $row['idFormation']=='23'){ echo 'selected'; }?> value="WordPress" >WordPress </option>
                               <option <?php if( $row['idFormation']=='24'){ echo 'selected'; }?> value="community management" >community management </option>

                            </select>
                </div>
                
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit"  name="update" value="update" class="btn btn-primary"> modifier</button>
                       </div>
         </form>
      </div>
     </div>
   </div>
 

 

 <?php endwhile?>
                                       
 </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->                     

 <?php
$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
// set the PDO error mode to exception
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



	$sql = "SELECT   idf,titrefor FROM `formations`;";

        // use exec() because no results are returned
        
        $q= $con-> query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
      

		
?>
 <!--Model Ajouter etudiant-->
<div class="modal fade" id="createproject" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md ">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Ajouter un etudiant</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data"  action="php/Etudiant.php" method="post">
            <div class="modal-body">
                <div class="mb-3">  
                    <input type="hidden" class="form-control" id="exampleFormControlInput77" name="ide" value="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Nom </label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" name="nom" value=""  placeholder="Nom de formation">
                </div>
                
                
      
                    <div class="mb-3"> 
                         <label for="exampleFormControlInput77" class="form-label">Prénom </label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" name="prenom" value=""  placeholder="Nom ">
                  </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" name="email" value=""  placeholder="Prénom">
                
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Téléphone</label>
                    <input type="number" class="form-control" id="exampleFormControlInput77" name="tele" value=""  placeholder="Télé">
                
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Date de naissance</label>
                    <input type="date" class="form-control" id="exampleFormControlInput77" name="date" value=""  placeholder="Télé">
                
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput77" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="exampleFormControlInput77" name="ville" value=""  placeholder="Ville">
                
                </div>
                <div class="mb-3">
                    <label  for="exampleFormControlInput77" class="form-label">Statut</label>
                    <select  class="form-select" id="etat" name="statut" onChange=showHide()>
                                    <option  disabled >statut</option>
                                    <option value="0" >Etudiant</option>
                                    <option value="1" >Employée</option>
                                </select>
                        </div>
                        <div class="mb-3">
                        <div  name="hidden-panel" id="hidden-panel">
                            
                                    <label  for="exampleFormControlInput77" class="form-label" >Nom de poste : </label >
                                    <input type="text"class="form-control" id="exampleFormControlInput77"  name="poste"  value="" class="poste" placeholder="Nom de poste:">
                            </div>
                        </div>
                            <div class="mb-3">
                                    <label  for="exampleFormControlInput77" class="form-label"  >Nom d'Entreprise : </label >
                                    <input type="text"  class="form-control" id="exampleFormControlInput77"  name="entreprise"  value="" class="poste" placeholder="Nom d'Entreprise:">
                            </div>
                        
                <div class="mb-3">
                <label for="exampleFormControlInput77"  class="form-label" > Formations</label >
                            <select class="form-select" name="idFormation" >
                               
                               <option  selected disabled>Formations</option>
                               <?php while ($row =$q-> fetch()): ?> 
                               <option value="<?= $row['idf'] ?>" ><?= $row['titrefor'] ?></option> <?php endwhile;?>
                           </select>
                </div>
                
                <div class="mb-3">
                        <label  class="form-label">Type de formation</label>
                        <select class="form-select"  name="typefor" >
                        <option value="" selected disabled>Type de Formation</option> 
                        
                        <option value="A distance">A distance</option>
                        <option value="Présentiel">Présentiel</option>
                        
                         </select> 
                        
                    </div>
               
                <div class="mb-3">
                <label class="form-label" > Niveau Etude: </label>
                              <select class="form-select" name="niveauEtude">
                                    <option value="" disabled selected>Niveau Etude</option>
                                    <option value="">Je vous pas sélectionner</option>
                                    <option value="Niveau Bac">Niveau Bac</option>
                                    <option value="Bac+2">Bac+2</option>
                                    <option value="Bac+3">Bac+3</option>
                                    <option value="Bac+5">Bac+5</option>
                                    <option value="Autre">Autre</option>
                                    
                               </select>
                </div>  
                <div class="mb-3">
                 <input type="radio" id="femme" name="sexe" value="femme">
                              <label class="form-label" for="femme">Femme</label><br></div>
                            <div class="w-right">
                              <input type="radio" id="homme" name="sexe" value="homme">
                              <label  class="form-label" for="homme">Homme</label><br>

                </div>
                </div>  
                  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit"  name="ajouter" value="ajouter" class="btn btn-primary"> Ajouter</button>
                    </div>
         </form>
      </div>
     </div>
   </div>
 </div>
 

    </div>
</div>
        
<script>
function showHide() {
    let statut = document.getElementById('etat');
    let statut1 = document.getElementById('etatt1');
    if (statut.value == 1 ) {
        document.getElementById('hidden-panel').style.display = 'block'
    } else {
        document.getElementById('hidden-panel').style.display = 'none'
    }
}
</script>
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
        $('.deleterow').on('click',function(){
        var tablename = $(this).closest('table').DataTable();  
        tablename
                .row( $(this)
                .parents('tr') )
                .remove()
                .draw();

        } );
    });
</script>
</body>
</html>