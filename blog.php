<?php
$a5='active';
include('header.php');
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> Algolus</title>
    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <!-- <link rel="stylesheet" href="stylesheet/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
</head>

<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <!-- header -->
    <div class="banner-section">
        <div class="container">
            <div class="page-title">
                <div class="page-title-inner">
                    <div class="breadcrumbs text-left">
                        <div class="breadcrumbs-wrap  text-center">
                            <h1 class="title">blog post</h1>
                            <ul class="breadcrumbs-inner">
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#">blog post</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- banner-section -->
    <section class="blog-post blog-post-style2">
        <div class="container">
            <div class="title-section text-center wow fadeInDown">
                
                <p class="sub-heading color-one fs-2 ">Blog Post</p>
                <!-- <h2 class="flat-title">Lisez nos dernières nouvelles</h2> -->
                <p style="font-size: larger" >Vous souhaitez des conseils précieux pour développer votre<br> business? Vous recherchez des ressources pour évoluer dans votre<br> activité ? Alors n’hésitez pas à lire nos articles. </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <article class="blog-grid blog-content">
                        <div class="featured-post">
                            <div class="entry-image">
                                <img src="images/blog/img3.jpg" alt="images">
                            </div>
                        </div>
                        <div class="content-inside">
                            <div class="post-meta d-md-flex justify-content-md-between">
                                <div class="name-author">Technologie,Web</div>
                                <div class="time">Déc 14,2021 </div>
                            </div>
                            <h2 class="title"><a href="#">Avec Create Cloud Express,
                                Adobe veut séduire les jeunes créatifs</a></h2>
                            <div class="btn-read-more"><a href="blog-single.php">Read more</a></div>
                            <div class="hover-content"></div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay="400ms">
                    <article class="blog-grid blog-content">
                        <div class="featured-post">
                            <div class="entry-image">
                                <img src="images/blog/img22.jpg" alt="images">
                            </div>
                        </div>
                        <div class="content-inside">
                            <div class="post-meta d-md-flex justify-content-md-between">
                                <div class="name-author">Technologie,Web</div>
                                <div class="time">Déc 13,2021</div>
                            </div>
                            <h2 class="title"><a href="#">Chrome sur Windows est désormais 25% plus rapide affirme Google
                            </a></h2>
                            <br>
                            <div class="btn-read-more"><a href="blog-single2.php">Read more</a></div>
                            <div class="hover-content"></div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay="800ms">
                    <article class="blog-grid blog-content">
                        <div class="featured-post">
                            <div class="entry-image">
                                <img   src="images/blog/img5.jpg" alt="images">
                            </div>
                        </div>
                        <div class="content-inside">
                            <div class="post-meta d-md-flex justify-content-md-between">
                                <div class="name-author">Optimization , Technologie</div>
                                <div class="time">Déc 10,2021</div>
                            </div>
                            <h2 class="title"><a href="#">Q'est-ce-qu'Adroid 12L qui se lance en beta cette  semail
                            </a></h2>
                            <br>


                            <div class="btn-read-more"><a href="blog-single3.php">Read more</a></div>
                            <div class="hover-content"></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="flat-pagination blog-pagination text-center">
                <ul>
                    <li><a href="blog.php" class="page-numbers current">1</a></li>
                    <li><a href="blog2.php" class="page-numbers">2</a></li>
                    <li><a href="#" class="page-numbers">3</a></li>
                    <li><a href="#" class="page-numbers"><i class="fa fa-angle-right " aria-hidden="true"  ></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- blog -->
   <?php
 include('footer.php');
?><!-- footer-background -->

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