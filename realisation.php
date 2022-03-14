

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Algolus</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Bootstrap-->
    <!--<link rel="stylesheet" href="stylesheet/bootstrap.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




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

    <link href="icon/logo1.png" rel="shortcut icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.gallery-title
{
    font-size: 36px;
    color: #337ab7;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #337ab7;
    border-radius: 5px;
    text-align: center;
    color: #337ab7;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #337ab7;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #337ab7;

}
.filter-button.active
{
    background-color: #337ab7;
    color: white;
    
}
.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}
</style>
</head>

<body>
    <?php
         $a3='active';
        include('header.php');
    ?>
    <!-- <div id="loading-overlay">
        <div class="loader"></div>
    </div> -->

    <div class="banner-section">
        <div class="container">
            <div class="page-title">
                <div class="page-title-inner">
                    <div class="breadcrumbs text-left">
                        <div class="breadcrumbs-wrap text-center">
                            <h1 class="title">Nos Projets</h1>
                            <ul class="breadcrumbs-inner">
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#">Réalisation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- banner-section -->
    <br><br> <br>                     
    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
        </div>
        <?php
         try{ 
             
                         
                         $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
                         //$sql="SELECT nom_categorie FROM categorie";
                         $sql="SELECT projet.id_categorie,nom_categorie FROM projet inner join categorie on categorie.id_categorie=projet.id_categorie  GROUP BY categorie.nom_categorie  ; ";
                     
                         $q= $con-> query($sql);
                         $q->setFetchMode(PDO::FETCH_ASSOC);
 
 
             } catch(PDOException $e) {
             echo $sql . "<br>" . $e->getMessage();
             }
 
 
 ?> 
        <div align="center">
        
            <button class="btn btn-default filter-button active" data-filter="all">All</button>
            <?php while ($row =$q-> fetch()): ?>  
             <button class="btn btn-default filter-button" data-filter="<?= $row['id_categorie'] ?>"><?= $row['nom_categorie'] ?></button>
             <?php endwhile; ?> 
            </div>
          
        <br/>

        <?php
   
   if(!empty($_GET['id']) ){
       $id= $_GET['id'];
       
  
       try{ 
               $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
               $sql="SELECT projet.id_categorie,description,image,nom_categorie FROM projet inner join categorie on categorie.id_categorie=projet.id_categorie  WHERE projet.id_categorie=$id  GROUP BY categorie.nom_categorie  ;";
               
               $r= $con-> query($sql);
               $r->setFetchMode(PDO::FETCH_ASSOC);
                var_dump($id);
                die();
               } catch(PDOException $e) {
               echo $sql . "<br>" . $e->getMessage();
               }
}else{
       try{ 
                   
                       $con= new PDO('mysql:host=localhost:3306;dbname=algolus','root','');
                       $sql="SELECT projet.id_categorie,description,image,nom_categorie FROM projet inner join categorie on categorie.id_categorie=projet.id_categorie  GROUP BY categorie.nom_categorie  ;";
                       
                       $r= $con-> query($sql);
                       $r->setFetchMode(PDO::FETCH_ASSOC);

           } catch(PDOException $e) {
           echo $sql . "<br>" . $e->getMessage();
           }

}
?>


        <?php while ($row =$r-> fetch()): ?>   
    
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter  <?=$row['id_categorie'];?> ">
       
                <img src="/saku-package/Saku/images/project/<?= $row['image'];?>" alt="images" class="img-responsive">
                 <h3 class="name-gr" ><a href="<?= $row['description']; ?>"
                 target="_blank" style="color: gainsboro;"><?= $row['nom_categorie']; ?></a></h3>
                <p style="color: white;" ><strong><?= $row['description']; ?></strong></p>
            </div>                         
                
       <?php endwhile;?>
    
</section>
     </div>   
     </div>
     
 
<!-- portfolio -->
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
        </footer><!-- footer -->
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


 
       <!-- bottom -->
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
<script>
$(document).ready(function(){
$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('1000');
        $('.filter').filter('.'+value).show('1000');
        
    }
    
    $(document).on('click','div button',function(){
     $(this).addClass('active').siblings().removeClass('active')});  

});

});</script>