<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>Algolus</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="stylesheet/bootstrap.css">

    <!-- Template Style-->
    <link rel="stylesheet" href="stylesheet/jquery-fancybox.css">
    <link rel="stylesheet" href="stylesheet/jquery-ui.css">
    <link rel="stylesheet" href="stylesheet/owl.theme.default.min.css">
    <link rel="stylesheet" href="stylesheet/owl.carousel.min.css">
    <link rel="stylesheet" href="rev-slider/css/layers.css">
    <link rel="stylesheet" href="rev-slider/css/navigation.css">
    <link rel="stylesheet" href="rev-slider/css/settings.css">
    <link rel="stylesheet" href="stylesheet/animate.css">
    <link rel="stylesheet" href="stylesheet/custom-animation.css">
    <link rel="stylesheet" href="stylesheet/icomoon.css">
    <link rel="stylesheet" href="stylesheet/shortcodes.css">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/responsive.css">
    <link rel="stylesheet" href="stylesheet/colors/color1.css" id="colors">
    <link rel="stylesheet" href="stylesheet/colors/colorsub1.css" id="colors_s">

    <link href="icon/logo0.png" rel="shortcut icon">

    <style>
        .best-business-type1 .content .title {
            font-size: 25px;
        }

    </style>

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }
        button{
            border: none;
        background:transparent;
        }
        .bg-light {
            background-color: transparent !important;
        }
        .carousel-item {
            height: 100vh;
            min-height: 300px;
        }
        .carousel-caption {
            bottom: 220px;
        }
        .carousel-caption h5 {
            font-size: 45px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
            font-style: italic;

        }
        .carousel-caption p {
            width: 60%;
            margin: auto;
            font-size: 18px;
            line-height: 1.9;
            font-style: italic;
        }
        .carousel-caption a {
            text-transform: uppercase;
            text-decoration: none;
            background: linear-gradient(4345deg, #8359c2, #3a95de);
            padding: 10px 30px;
            display: inline-block;
            color: #ffffff;
            margin-top: 15px;
        }
        .carousel-caption a:hover{
            text-transform: uppercase;
            text-decoration: none;
            background: linear-gradient(434deg, #89c9d5, #c2a0e8);
            padding: 10px 30px;
            display: inline-block;
            color: #ffffff;
            margin-top: 15px;
        }
        .navbar-nav a {
            font-size: 18px;
            text-transform: uppercase;
            font-weight: bold;
        }
        .navbar-light .navbar-brand {
            color: #fff;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
            color: #fff;
        }
        /*a:hover {
            color: #f2f4f6;
        }*/
        .navbar-light .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
            color: #fff;
        }
        .w-100 {
            height: 100vh;
        }
        .navbar-toggler {
            padding: 1px 5px;
            font-size: 18px;
            line-height: 0.3;
            background: #fff;
        }
        @media only screen and (max-width: 767px) {
            .navbar-nav {
                text-align: center;
                background: rgba(0, 0, 0, 0.5);
            }
            .carousel-caption {
                bottom: 165px;
            }
            .carousel-caption h5 {
                font-size: 17px;
            }
            .carousel-caption a {
                padding: 10px 15px;
                font-size: 15px;
            }
            .btn-send hv-linear border-corner{
                font-style: italic;
            }


        }

    </style>
    <style type="text/css">
        /*.carousel-caption {
            top: 200px;
            margin-left: -40%;
        }*/

    </style>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>
<body class="counter-scroll">
<?php
     $a1='';
     $a2='';
     $a3='';
     $a4='';
     $a5='';
     $a6='';
     $a7='active';
    include('header.php');
    
    
?>
<!-- <div id="loading-overlay">
    <div class="loader"></div>
</div> -->
<!-- header -->

<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
    <div class="carousel-indicators">
        <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img alt="..." class="d-block w-100" src="images/blog/jdjdjd.png">
            <div class="carousel-caption" style="padding-bottom: 15rem; right: 50%; bottom: -11rem; left: 1%;">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Marketing digital</h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay:2s">algolus pour vous accompagner à deployer<br> efficacement leurs <b>activités sur internet</b> a fin de toucher de nouveaux clients potentiels <br> et de toucher de nouveaux clients.</p>
                <a href="inscription.php" class="btn-send hv-linear border-corner">S'inscrire</a>
            </div>
        </div>
        <div class="carousel-item" >
            <img alt="..." class="d-block w-100" src="images/blog/xxxx.png">
            <div class="carousel-caption" style="padding-bottom: 15rem; right: 50%; bottom: -11rem; left: 1%;" >
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Creation site Web</h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">D'un simple <b>site internet</b> de présence à un développement sur mesure, nous possédons toutes les compétances techniques nécessaires pour satisdaire votre besoin .
                </p>
                <a href="inscription.php" class="btn-send hv-linear border-corner">S'inscrire</a>

            </div>
        </div>
        <div class="carousel-item">
            <img alt="..." class="d-block w-100" src="images/blog/sasasasa.png">
            <div class="carousel-caption" style="padding-bottom: 15rem; right: -40%; bottom: -11rem;">
                            <h5 class="animated bounceInRight" style="animation-delay: 1s">Reference SEO</h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">
                    Nous allons vous apporter notre expertise afin de<br> garantir une stratégie <b>SEO</b> réussite. site web <br> disponible sur la <b>1ère page </b>du moteur<br> de recherche Google.
                    </p>
                    <a href="inscription.php" class="btn-send hv-linear border-corner">S'inscrire</a>

            </div>
        </div>
    </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden"></span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden"></span></button>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
</script>



<section class="find-customer find-customer-has-shape find-customer-style2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12 wow fadeInLeft">
                <div class="featured-post">
                    <div class="entry-image up-down">
                        <img src="images/about/02.jpg" alt="images">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="flat-spacer" data-desktop="64" data-sdesktop="0" data-mobi="0" data-smobi="0"></div>
                <div class="title-section wow fadeInDown" data-wow-delay="400ms">
                    <p class="sub-heading color-two"> A PROPOS DE NOUS</p>
                    <h2 class="flat-title shape-image">Après ces formations, vous saurez créer des sites vous-même !</h2>
                    <div class="triangle-image none-mobile"><img src="images/contact/03.png" alt="images"></div>
                </div>
                <div class="content-find-customer wow fadeInRight" data-wow-delay="600ms">
                    <p>
                        Algolus pour but de vous informer les technologies web, le codage, l’algorithmique, les objets connectés et tant d’autres sujets liés à la transformation numérique.
                        <br>Algolus Académie vous offre:
                        <br> - Attestation de la formation .
                        <br> - Offre d'un stage. </p>
                    <div class="count-section d-flex justify-content-center mg-47">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- find-customer -->
<!------------------------SERVICE------------------------------->
<section class="flat-services services-has-bg services-title-one">
    <div class="container">
        <div class="title-section text-center wow fadeInDown">
            <p class="sub-heading color-two">Services</p>
            <h2 class="flat-title shape-image in-center">Ce que nous fesons ?</h2>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                <div class="services-box services-box-type1">
                    <div class="snow-dot"></div>
                    <div class="iconbox-icon">
                        <div class="icon-wrap">
                            <span class="icon-analysis"></span>
                        </div>
                    </div>
                    <div class="iconbox-content">
                        <h3 class="title">Création de site web </h3>
                        <p class="description">
                            D'un simple <b>site internet </b> de présence à un développement sur mesure, nous possédons toutes les compétences techiques nécessaires pour satisfaire ..
                        </p>
                        <div class="read-more"><a href="services.php">Lire la suite</a></div>
                    </div>
                    <div class="rectangle-1"></div>
                    <div class="rectangle-2"></div>
                    <div class="rectangle-3"></div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" >
                <div class="services-box services-box-type1">
                    <div class="snow-dot"></div>
                    <div class="iconbox-icon">
                        <div class="icon-wrap">
                            <span class="icon-tax"></span>
                        </div>
                    </div>
                    <div class="iconbox-content">
                        <h3 class="title">Maintenance</h3>
                        <p class="description">
                            La maintenance, c'est une sorte d'assurance, d'une garantie de la bonne tenue de votre site web, mais pas seulement; c'est aussi garantir sa pérennité.
                        </p>
                        <div class="read-more"><a href="services.php">Lire la suite</a></div>
                    </div>
                    <div class="rectangle-1"></div>
                    <div class="rectangle-2"></div>
                    <div class="rectangle-3"></div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                <div class="services-box services-box-type1">
                    <div class="snow-dot"></div>
                    <div class="iconbox-icon">
                        <div class="icon-wrap">
                            <span class="icon-connection"></span>
                        </div>
                    </div>
                    <div class="iconbox-content">
                        <h3 class="title">déveloper spécific </h3>
                        <p class="description">

                            développer une <b>application sur mesure</b> permet de concevoir une application qui correspond votre organisation... </p>
                        <div class="read-more"><a href="services.php">Lire la suite</a></div>
                    </div>
                    <div class="rectangle-1"></div>
                    <div class="rectangle-2"></div>
                    <div class="rectangle-3"></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- services -->
<section class="best-business best-business-type1">
    <div class="green-dot big none-1199"></div>
    <div class="green-dot small none-1199"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="featured-post">
                    <div class="entry-image">
                        <img src="images/blog/412ea792b6963690a4a9dce67b73f216.jpg" alt="images"class="rounded mx-auto d-block" style="margin-bottom:30%; ">
                    </div>
                    <div class="btn-play-animation btn-linear linear-color-two videobox">
                        <a href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1" data-type="iframe" class="hv-linear play-box fancybox">
                            <span class="icon-play-button"></span>
                            <span class="ripple"></span>
                        </a>
                    </div>
                    <div class="polygon none-1199"><img src="images/contact/04.png" alt="images"></div>
                    <div class="pattern1 none-1199"><img src="images/contact/05.png" alt="images"></div>
                    <div class="pattern2 none-1199"><img src="images/contact/05.png" alt="images"></div>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="flat-spacer" data-desktop="115" data-sdesktop="120" data-mobi="50" data-smobi="50"></div>
                <div class="content" class="text-center">
                    <h4 class="title text-white wow fadeInRight">Vous n’aurez jamais une deuxième chance de faire une bonne première impression . </h4>
                    <div class="fl-btn btn-linear linear-color-two wow fadeInRight" data-wow-delay="300ms">
                        <a href="inscription.php" class="btn-send hv-linear border-corner">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rectangle-4"></div>
    <div class="rectangle-5"></div>
    <div class="rectangle-6"></div>
</section>

<br><br>

    <div class="container">
        <div class="title-section wow fadeInRight">
            <p class="sub-heading color-two">Formation</p>
            <h5 class="flat-title">Rejoignez Algolus Académie</h5>
            <p>
                Algolus Académie à pour but de réunir l’expertise nécessaire afin de développer vos<br> compétences en web grâce à des formations, des certificats proposés par </br> des professeurs compétents.
                Nos formations vous permettent:

            </p>
        </div>
                                    
<?php 

try{ 

        $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
        $sql="SELECT * FROM `formations` ";
        
        $q= $con-> query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);

    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
        <div class="portfolio-nav-custom nav-custom">
            <div class="banners-z">
                <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="30" data-column="3" data-column2="2" data-column3="2" data-column4="1" data-dots="false" data-auto="true" data-nav="true" data-loop="true">
                    <div class="owl-carousel">
                     <?php while ($row =$q-> fetch()): ?> 
                        <div class="images-box-portfolio wow fadeInUp" data-wow-delay="400ms">
                           <div class="content-portfolio">
                            
                                <div class="title"> <?php echo htmlspecialchars($row['titrefor'])?></div>
                                <h3 class="name"></h3>
                                <p>
                                <?php echo htmlspecialchars($row['descriptionfor'])?>
                                </p>
                            </div>
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="images/services/<?php echo htmlspecialchars($row['image'])?>" alt="images">
                                </div>
                            </div>
                        </div>
                       
                       <?php endwhile;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br> <br>
<!-- portfolio -->
<!-- team-members -->
<!-- testimonial -->
<!-- faq -->
<!-- blog-post -->
<!-- contact-section -->
   <?php include('footer.php');?>

<script src="javascript/jquery.min.js"></script>
<script src="javascript/plugins.js"></script>
<script src="javascript/jquery-ui.js"></script>
<script src="javascript/owl.carousel.min.js"></script>
<script src="javascript/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
<script src="javascript/jquery-fancybox.js"></script>
<script src="javascript/jquery-countTo.js"></script>
<script src="javascript/wow.min.js"></script>
<script src="javascript/jquery-validate.js"></script>
<script src="javascript/jquery.cookie.js"></script>
<script src="javascript/main.js"></script>

<!-- slider -->
<script src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="javascript/rev-slider.js"></script>

<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js"></script>
<script src="rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js"></script>
<script src="rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js"></script>
<script src="rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js"></script>
<script src="rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js"></script>
<script src="rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js"></script>
<script src="rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js"></script>
<script src="rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js"></script>
<script src="rev-slider/js/extensions/extensionsrevolution.extension.video.min.js"></script>
</body>
</html>