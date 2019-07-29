<?php
include "../entities/produit.php";
include "../core/produitC.php";
include "../entities/categorie.php";
include "../core/categorie1.php";
$categorieC=new CategorieC();
 $listeCat=$categorieC->afficherCategories();
  $listeCat1=$categorieC->afficherCategories1();
   $listeCat2=$categorieC->afficherCategories2();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HERITIERS CHOUROU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
       <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

           <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="rechercherp.php" class="site-block-top-search" method="get">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" name="nomp" placeholder="Rechercher Produit">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">HERITIERS CHOUROU</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
                      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active">
              <a href="index.php">Accueil </a></li>
            <li class="has-children">
           <a href="shop.php">Catalogue</a>
              <ul class="dropdown">
                  <li class="has-children">
                  <a href="shoptype.php?type=homme">Homme</a>
                  <ul class="dropdown">
                    <?php foreach($listeCat as $row)
                    { ?>
                    <li><a href="shopcat.php?type=homme&nomcat=<?php echo $row['nomcat'];?>"><?php echo $row['nomcat']; ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
                  <li class="has-children">
                  <a href="shoptype.php?type=femme">Femme</a>
                  <ul class="dropdown">
                      <?php foreach($listeCat1 as $row1)
                    { ?>
                    <li><a href="shopcat.php?type=femme&nomcat=<?php echo $row1['nomcat'];?>"><?php echo $row1['nomcat']; ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
                  <li class="has-children">
                  <a href="shoptype.php?type=enfant">Enfant</a>
                  <ul class="dropdown">
                      <?php foreach($listeCat2 as $row2)
                    { ?>
                    <li><a href="shopcat.php?type=enfant&nomcat=<?php echo $row2['nomcat'];?>"><?php echo $row2['nomcat']; ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="shopdate.php">LES Nouveautés</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
 

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="images/4549.jpg" alt="Image placeholder" class="img-fluid rounded">
            

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            
            
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Présentation</h2>
            </div>
            <p>Découvrez Notre Différentes Gammes Chaussures Pour Professionnels Grossiste de Chaussure, Vente gros chaussures, Vente gros chaussures femmes, Vente gros chaussures hommes, Vente gros chaussures enfants Nous somme leader de fashion, Nous somme leader de tendance, Nous somme grossiste chaussure, En gros grand choix des modèles: Entrée de gamme, Milieu de gamme, Haut de gamme.</p>
           
            
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Tunis</span>
              <p class="mb-0">44-47, Rue Al-Djazira,Tunis,Tunisia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>

            <div class="text">
              <h2 class="text-uppercase">Livraison payante</h2>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Retour gratuit</h2>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
            
            </div>
          </div>
        </div>
      </div>
    </div>
  <footer class="site-footer border-top">
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">44-47, Rue Al-Djazira,Tunis,Tunisia</li>
                <li class="phone"><a href="tel://0021671321982">+216 71 321 982</a></li>
                <li class="phone"><a href="tel://0021671320757">+216 71 320 757</a></li>
                <li class="address">CODE TVA : 1484440/R/A/M/000 </li>
                <li class="email">mouradchourou47@gmail.com</li>
              </ul>
            </div>

            <div class="block-7">
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/aminechourou11" target="_blank" class="text-primary">Med Amine Chourou</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>