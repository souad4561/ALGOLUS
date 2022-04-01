<?php


$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
session_start();

if (!isset($_SESSION["user_login"])) 
{
    header("location:ui-elements/auth-signin.php");
}

$id = $_SESSION['user_login'];
$statement = $con->prepare("SELECT * FROM user WHERE :id");
$statement->execute(array(':id' => $id));

$row = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Algolus </title>
    <link rel="icon" href="assets/images/logo2.png" type="image/x-icon"> <!-- Favicon-->
   
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
                 <li><a class="m-link  active" href="index.php"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
                </li>

                <li><a class="m-link " href="projet.php"><i class="icofont-ticket"></i> <span>Projets</span></a></li>
                </li>
             
                
               <li><a class="m-link " href="categoriee.php"><i class="icofont-briefcase"></i> <span>Categories</span></a></li>
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
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Bonjour <?php if (isset($_SESSION['user_login'])) {
    echo $row['Nom'];
}?></span></p>
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
                                                <p class="mb-0"><span class="font-weight-bold"> <?php if (isset($_SESSION['user_login'])) {
    echo $row['Nom'];
}?></span></p>
                                                <small class=""><?php if (isset($_SESSION['user_login'])) {
    echo $row['Email'];
}?></small>
                                            </div>
                                        </div>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="php/deconnexion.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Déconnecter</a>
                                        <!-- <a href="profile.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Profile</a> -->
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
        <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row clearfix g-3">
                    <div class="col-xl-8 col-lg-12 col-md-12 flex-column">
                        <div class="row g-3">
                            <div class="col-md-12">
                                
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Nombre de projets par mois</h6>
                                    </div>
                                    <div class="card-body">
                                        
                                    <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12" style="margin-top:50px; ">
                        <div class="row g-3 row-deck">
                            <div class="col-md-6 col-lg-6 col-xl-12">
                                <div class="card bg-primary">
                                    <div class="card-body row">
                                        <div class="col">
                                            <span class="avatar lg bg-white rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-text fs-5"></i></span>
                                            <h1 class="mt-3 mb-0 fw-bold text-white">   <?php
try {
    $con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $con->query("SELECt * FROM `projet` ");

    // use exec() because no results are returned

    if ($query->rowCount()) {
        echo $query->rowCount();
    }
    else {

        echo 'no result';
    }

}
catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$con = null;



?></h1>
                                            <span class="text-white">Projets</span>
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid" src="assets/images/interview.svg" alt="interview">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-12">
                                <div class="card bg-primary">
                                    <div class="card-body row">
                                        <div class="col">
                                            <span class="avatar lg bg-white rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-text fs-5"></i></span>
                                            <h1 class="mt-3 mb-0 fw-bold text-white">   
<?php
    try {
            $con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
            // set the PDO error mode to exception
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $con->query("SELECt * FROM `categorie` ");

            // use exec() because no results are returned

            if ($query->rowCount()) {
                echo $query->rowCount();
            }
            else {

                echo 'no result';
            }

    }
    catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

$con = null;



?></h1>
                                            <span class="text-white">Categories</span>
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid" src="assets/images/interview.svg" alt="interview">
                                        </div>
                                    </div>
                                </div>
                            </div>
           
                                
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                   <!-- Row End -->
            </div>
        </div> 

        <script>
            let xValues = [];
            let yValues = [];
        </script>
        <?php


try {
    $row = array();
    $con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
    $sql = "SELECT COUNT(*) AS yValues , MONTHNAME(date) AS xValues FROM projet GROUP BY MONTHNAME(date) ORDER BY MONTHNAME(date) ASC ;";
    $q = $con->query("$sql")->fetchAll();

    foreach ($q as $a): ?>
                    <script>
                        xValues.push('<?= $a['xValues']; ?>');
                        yValues.push('<?= $a['yValues']; ?>');
                    </script>
                <?php
    endforeach;


// and somewhere later:




}
catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}



?>


 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/apexcharts.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="js/template.js"></script>
<script src="js/page/hr.js"></script>
</body>
<script>
   console.log( xValues);
   console.log( yValues);
    // xValues=['Jan','Feb','March','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec']
    // yValues=[1,2,10,3,6,8,4,9,4,9,7,4]


    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                color: '#fff',
                barColors:[
                    'rgba(179,6,38,0.6)',
                    'rgba(121,8,44,0.8)',
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth:3,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Nombre de projets "
            }
        }
    });
</script>
</html> 