<?php
$a6='';
include('header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>algolus</title>

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
                            <h1 class="title">Inscription</h1>
                            <ul class="breadcrumbs-inner">
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#">Algolus Académie</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- banner-section -->
    <div class="flat-row-half">
        <!-- <div class="container">
        <div >  
       <p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6560.980635412068!2d-1.906378!3d34.692811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff1850acdcc88a22!2sALGOLUS!5e0!3m2!1sen!2sus!4v1642351839551!5m2!1sen!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       </p>
                  </div>--><!-- flat-map -->
        </div> 
    </div><!-- flat-row -->
    <div  style="margin-bottom: 30%; " class="contact-section contact-transform contact-style4 mg-change-97">
        <div class="container" style="margin-top: -20%; ">
            <div class="contact-inside d-lg-flex">
                <div class="col-left">
                    <div class="contact-us contact-style">
                        <div class="title-section">
                            <h2 class="flat-title shape-image">Inscrivez-vous</h2>
                        </div>
                    </div>
                </div>
                <?php
$con = new PDO('mysql:host=localhost:3306;dbname=algolus', 'root', '');
// set the PDO error mode to exception
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



	$sql = "SELECT   idf,titrefor FROM `formations`;";

        // use exec() because no results are returned
        
        $q= $con-> query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
      

		
?>



                <div class="col-right">
                    <form id="" action="./inscription/inscrir.php" method="post" class="form-contact form-submit">
                        <div class="text-wrap d-sm-flex clearfix">
                            <div class="w-left">
                            <label >Nom :<em style="color:red">*</em> </label >
                                <input type="text" name="nom" id="name" value="" class="name" placeholder="Nom:" required> </span>
                            </div>
                            <div class="w-right">
                            <label >Prénom :<em style="color:red">*</em> </label >
                            <input type="text" name="prenom" id="prenom" value="" class="prenom" placeholder="Prénom:" required>

                            </div>
                        </div>
                        <div class="text-wrap d-sm-flex clearfix">
                            <div class="w-left">
                            <label >Email :<em style="color:red">*</em> </label >
                            <input type="text" name="email" id="email" value="" class="email" placeholder="Email:" required>
                            </div>
                            <div class="w-right">
                            <label >Téléphone :<em style="color:red">*</em> </label >
                                <input type="text" name="telephone" id="phone" value="" class="phone" placeholder="Téléphone:"required>
                            </div>
                        </div>
                        <div class="text-wrap d-sm-flex clearfix">
                            <div class="w-left">
                            <label >Formations : <em style="color:red">*</em></label >
                            <select name="idFormation" required>
                               
                               <option  selected disabled>Formations</option>
                               <?php while ($row =$q-> fetch()): ?> 
                               <option value="<?= $row['idf'] ?>" ><?= $row['titrefor'] ?></option> <?php endwhile;?>
                           </select>
                            </div>
                            <div class="w-right">
                            <label> Type de Formation: </label >
                                
                                <select name="typefor">
                               
                               <option value="" selected disabled>Type de Formation</option> 
                        
                               <option value="A distance">A distance</option>
                               <option value="Présentiel">Présentiel</option>
                           </select> 
                            </div>
                        </div>
                        <div class="text-wrap d-sm-flex clearfix">
                            <div class="w-left">
                            <label >Statut : </label >
                          <select  id="etat" name="statut" onChange=showHide()>
                                    <option  disabled >statut</option>
                                    <option value="0" >Etudiant</option>
                                    <option  selected value="1" >Employée</option>
                                </select>
                        </div>
                            <div class="w-right">
                            <label > Niveau Etude: </label >
                              <select name="niveauEtude">
                                    <option value="" disabled selected>Niveau Etude</option>
                                    <option value="">Je vous pas sélectionner</option>
                                    <option value="Niveau Bac">Niveau Bac</option>
                                    <option value="Bac+2">Bac+2</option>
                                    <option value="Bac+3">Bac+3</option>
                                    <option value="Bac+5">Bac+5</option>
                                    <option value="Autre">Autre</option>
                                    

                               </select>
                            </div>
                        </div>
                        
                          <div name="hidden-panel" id="hidden-panel" >
                              <div class="text-wrap d-sm-flex clearfix" >
                                <div class="w-left" >
                                    <label >Fonctionnalité : </label >
                                    <input type="text" name="fonction"  value="" class="fonction" placeholder="fonctionnalité:">
        
                                </div>   
                                <div class="w-right" >
                                    <label >Nom d'Entreprise : </label >
                                    <input type="text" name="entreprise"  value="" class="entreprise" placeholder="Nom d'Entreprise:">

                            </div>  
                        
                        </div>                         
                        </div>
                        <div class="text-wrap d-sm-flex clearfix">
                            <div class="w-left">
                            <label >Date de naissance : </label >
                            <input type="date" name="date"  value="" class="date" placeholder="Date de naissance:">

                            </div>
                        
                            <div class="w-right">
                            <label >Ville : </label >
                              
                                <input type="text" name="ville" id="ville" value="" class="ville" placeholder="ville:"> 

                            </div>  
                                                      
                        </div>
                        <div class="text-wrap d-sm-flex clearfix">
                        <div class="w-left">
                            <label >Adresse : </label >
                            <input type="text" name="Adress" id="Adress" value="" class="Adress" placeholder="Adresse:">
                            
                            </div> 
                           
                        
                            </div>
                      
                        <div class="text-wrap d-sm-flex clearfix">
                            <div class="w-left">
                            <input type="radio" id="femme" name="sexe" value="femme">
                              <label for="femme">Femme</label><br></div>
                            <div class="w-right">
                              <input type="radio" id="homme" name="sexe" value="homme">
                              <label for="homme">Homme</label><br>

                            </div>
                                                     
                        </div>
                      
                         <div class="fl-btn btn-linear linear-color-one" >
                            
                            <button  name="submit" type="submit" class="submit btn-contact hv-linear border-corner" >Inscrivez-vous</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div><!-- contact-section -->

<script>
function showHide() {
    let statut = document.getElementById('etat')
    if (statut.value == 1) {
        document.getElementById('hidden-panel').style.display = 'block'
    } else {
        document.getElementById('hidden-panel').style.display = 'none'
    }
}
</script>
    <div class="footer-background">
        <footer id="footer" class="footer">
            <div class="container">
                <div class="partners">
                    <div class="banners-z">
                        <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="70" data-column="6" data-column2="5" data-column3="4" data-column4="2" data-dots="false" data-auto="true" data-nav="false" data-loop="true">
                            <div  class="owl-carousel" style="width: 90%; position:absolute ">
                                <img style="width:60% ;" src="images/partners/010.png" alt="images">
                                <img src="images/partners/02.png" alt="images">
                                <img src="images/partners/03.png" alt="images">
                                <img src="images/partners/04.png" alt="images">
                                <img style="width:60% ;"  src="images/partners/05.jpg" alt="images">
                                <img src="images/partners/06.png" alt="images">                         
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer-widget">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="widget widget-subscribe">
                                <!--<div class="text">
                                    Join with the entrepreneur community for business.
                                </div>-->
                                <form action="#" class="subscribe-form btn-linear linear-color-one">
                                    <input type="email" placeholder="contact@algolus.com">
                                    <button class="btn-join-now hv-linear">inscrivez-vous</button>
                                </form>
                                <p class="description">* Abonnez-vous aujourd'hui pour la mise à jour.</p>
                                <br>
                                <div >
                                    <!--  <h3 class="widget widget-title">Social Media</h3>-->
                                      <ul class="widget-social-media">
                                          <li><a href="https://www.facebook.com/algolus.ma " target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                          <li><a href="https://linkedin.com/company/algolus" target="_blank"><i  class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                                          <li><a href="https://www.instagram.com/algolus.ma/" target="_blank"><i  class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                                      </ul>
                                  </div>
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-3 col-md-4 col-sm-4 col-12 mg-widget pd-footer-69">
                            <h3 class="widget widget-title">About Us</h3>
                            <p style="color:gainsboro">agence WEB marocaine,<br> créé en 2020, spécialisée dans la création et le développement
                                 des solutions informatiques en proportion des besoins des clients.</p>
                           <!-- <ul class="widget-nav-menu">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Outlook Plugings</a></li>
                                <li><a href="#">Live chatting</a></li>
                            </ul>-->
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-12 mg-widget">
                            <h3 class="widget widget-title">Services</h3>
                            <ul class="widget-nav-menu">
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Maintenance </a></li>
                                <li><a href="#">Development specific</a></li>
                                <li><a href="#">Référencement SEO</a></li>
                                <li><a href="#"> Community Management</a></li>
                                <li><a href="#">Stratégie marketing</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-12 mg-widget">
                            <h3 class="widget widget-title"> <div class="col-lg-2 col-md-4 col-sm-4 col-12 mg-widget">
                            <h3 class="widget widget-title">Category </h3>
                            <ul class="widget-nav-menu">
                                <li><a href="#"> Sur Mesure</a></li>
                                <li><a href="#">E-Commerce </a></li>
                                <li><a href="#"> Catalogue</a></li>
                                <li><a href="#"> Vitrne</a></li>
                            
                            </ul>
                        </div>
                        </div>
                       <!-- <div class="col-lg-2 col-md-4 col-sm-4 col-12 mg-widget">
                           
                            <ul class="widget-social-media">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                               
                                <li><a href="#"><i  class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                                <li><a href="#"><i  class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="spinning-circle-top blurs-circle"></div>
            <div class="spinning-circle-bottom blurs-circle"></div>
        </footer>
    <!-- footer -->
        <div id="bottom" class="bottom">
            <div class="container">
                <div class="bottom-wrap">
                    <div class="bottom-inside d-md-flex justify-content-md-between align-items-center">
                        <div id="copyright"><p>© 2021 — <strong><span style="color: #00ccff;">ALGOLUS</span></strong>. All Rights Reserved.</p> </div>
                        <div class="address"></div>
                        <div class="logo-footer">
                            <a  href="index.php"><img  style="width: 100px;"src="images/logo/algolus-logo.png" alt="images"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- bottom -->
        <a id="scroll-top" class="show"></a>
    </div><!-- footer-background -->
    
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