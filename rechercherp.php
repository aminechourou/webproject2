
<?php 
include "../entities/produit.php";
include "../core/produitC.php";
include "../entities/categorie.php";
include "../core/categorie1.php";
$categorieC=new CategorieC();
 $listeCat=$categorieC->afficherCategories();
  $listeCat1=$categorieC->afficherCategories1();
   $listeCat2=$categorieC->afficherCategories2();
$produitC=new ProduitC();
 $listeProduit=$produitC->rechercherProd($_GET['nomp']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers</title>
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
                <a href="index.php" class="js-logo-clone">CHOUROU</a>
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
            <li><a href="shopdate.php">les nouveautés</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
           <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Couleur</h3>
                <a href="shop1.php?couleur=rouge" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Rouge (2,429)</span>
                </a>
                <a href="shop1.php?couleur=vert" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Vert (2,298)</span>
                </a>
                <a href="shop1.php?couleur=bleu" class="d-flex color-item align-items-center" >
                  <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Bleu (1,075)</span>
                </a>
                <a href="shop1.php?couleur=mauve" class="d-flex color-item align-items-center" >
                  <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Mauve (1,075)</span>
                </a>
              </div>
    </header>
	
<div class="site-section">
    
      <div class="container">

        <div class="row mb-5">

          <div class="col-md-9 order-2">
 	    
            <div class="row mb-5">
	<?php foreach($listeProduit as $row)
			{ ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              	
                <div class="block-4 text-center border">
            
                  <figure class="block-4-image">

                    <a href="shop-single.html"><img class="img-fluid" src="images\<?php echo $row['image'] ;?>" ></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3 class="text-primary font-weight-bold"><?php echo $row["nomp"]; ?></h3>
                    <p class="mb-0">Réference: <?php echo $row["ref"];?></p>
                    <p class="text-primary font-weight-bold">Prix: <?php echo $row['prix']; ?> dt</p>
                    
                  </div>
                </div>

              </div>
              <?php } ?>   
            </div>
           
          </div>


</div>
  
</div>

       

          

     

          

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categories</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="shoptype.php?type=femme">
                      <figure class="image">
                        <img src="images/women.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Femme</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="shoptype.php?type=enfant">
                      <figure class="image">
                        <img src="images/children.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Enfant</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="shoptype.php?type=homme">
                      <figure class="image">
                        <img src="images/men.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Homme</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
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