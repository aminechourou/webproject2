<?php 
include "../entities/produit.php";
include "../core/produitC.php";
include "../entities/categorie.php";
include "../core/categorie1.php";
include "../entities/categori1.php";
include "../core/categorie2.php";
$categorieC=new CategorieC();
 $listeCat=$categorieC->afficherCategories();
  $listeCat1=$categorieC->afficherCategories1();
   $listeCat2=$categorieC->afficherCategories2();
   $listeCat3=$categorieC->afficherCategories3();
   $listeCat4=$categorieC->afficherCategories4();
      $listeCat6=$categorieC->afficherCategories5();

   $categorieC1=new CategorieC1();
 $listeCat5=$categorieC1->recupererCategorie10();
$produitC=new ProduitC();
 $listeProduit=$produitC->recupererCat8($_GET['type'],$_GET['nomcat1']);
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
                 <?php foreach($listeCat5 as $row)
                    { ?>
                  <li class="has-children">
                  <a href="shoptype.php?nomcat1=<?php echo $row['nomcat1'] ?>"><?php echo $row['nomcat1']; ?></a>
                  
                  <ul class="dropdown">
                    <li><a href="shopcate.php?nomcat1=<?php echo $row['nomcat1']?>&type=Bébé 18/22">Bébé 18/22</a></li>
                    <li><a href="shopcate.php?nomcat1=<?php echo $row['nomcat1']?>&type=Fafi 23/28">Fafi 23/28</a></li>
                    <li><a href="shopcate.php?nomcat1=<?php echo $row['nomcat1']?>&type=Enfant 29/34">Enfant 29/34</a></li>
                    <li><a href="shopcate.php?nomcat1=<?php echo $row['nomcat1']?>&type=Cadet 35/38">Cadet 35/38</a></li>
                    <li><a href="shopcate.php?nomcat1=<?php echo $row['nomcat1']?>&type=Dame 36/41">Dame 36/41</a></li>
                    <li><a href="shopcate.php?nomcat1=<?php echo $row['nomcat1']?>&type=Homme 40/44">Homme 40/44</a></li>
                    </ul>
                    <?php } ?>
                    <li class="has-children">
                  <a href="shoptype.php?nomcat1=autres">autres</a>
                      <ul class="dropdown">
                        <li class="has-children">
                    <a href="shopcate.php?nomcat1=autres&type=Bébé 18/22">Bébé 18/22</a>
                    <ul class="dropdown">
                    <?php foreach($listeCat as $row)
                    { ?>
                    <li><a href="shopcat.php?nomcat1=autres&type=Bébé 18/22&nomcat=<?php echo $row['nomcat'] ?>"><?php echo $row['nomcat']; ?></a></li>
<?php } ?></li>
</ul>
                        <li class="has-children">
                    <a href="shopcate.php?nomcat1=autres&type=Fafi 23/28">Fafi 23/28</a>
                    <ul class="dropdown">
                      <?php foreach($listeCat1 as $row)
                    { ?>
                    <li><a href="shopcat.php?nomcat1=autres&type=Fafi 23/28&nomcat=<?php echo $row['nomcat'] ?>"><?php echo $row['nomcat']; ?></a></li>
<?php } ?></li>
</ul>                                       <li class="has-children">
                    <a href="shopcate.php?nomcat1=autres&type=Enfant 29/34">Enfant 29/34</a>
                    <ul class="dropdown">
                      <?php foreach($listeCat2 as $row)
                    { ?>
                    <li><a href="shopcat.php?nomcat1=autres&type=Enfant 29/34&nomcat=<?php echo $row['nomcat'] ?>"><?php echo $row['nomcat']; ?></a></li>
<?php } ?></li>
</ul>  
                                            <li class="has-children">
                    <a href="shopcate.php?nomcat1=autres&type=Cadet 35/38">Cadet 35/38</a>
                    <ul class="dropdown">
                      <?php foreach($listeCat3 as $row)
                    { ?>
                    <li><a href="shopcat.php?nomcat1=autres&type=Cadet 35/38&nomcat=<?php echo $row['nomcat'] ?>"><?php echo $row['nomcat']; ?></a></li>
<?php } ?></li>
</ul>
                                                                <li class="has-children">
                    <a href="shopcate.php?nomcat1=autres&type=Dame 36/41">Dame 36/41</a>
                    <ul class="dropdown">
                      <?php foreach($listeCat4 as $row)
                    { ?>
                    <li><a href="shopcat.php?nomcat1=autres&type=Dame 36/41&nomcat=<?php echo $row['nomcat'] ?>"><?php echo $row['nomcat']; ?></a></li>
<?php } ?></li>
</ul>
                                                                <li class="has-children">
                    <a href="shopcate.php?nomcat1=autres&type=Homme 40/44">Homme 40/44</a>
                    <ul class="dropdown">
                      <?php foreach($listeCat6 as $row)
                    { ?>
                    <li><a href="shopcat.php?type=Homme 40/44&nomcat=<?php echo $row['nomcat'] ?>&nomcat1=autres"><?php echo $row['nomcat']; ?></a></li>
<?php } ?></li>
</ul>
                    </ul>
                </li>
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

          <div class="col-md-9 order-2">
 	    
            <div class="row mb-5">
	<?php foreach($listeProduit as $row)
			{
        ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              	
                <div class="block-4 text-center border">
            
                  <figure class="block-4-image">

                  <img class="img-fluid" src="images\<?php echo $row['image'] ;?>" ></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3 class="text-primary font-weight-bold"><?php echo $row["nomp"]; ?></h3>
                    <p class="mb-0">Réference: <?php echo $row["ref"];?></p>
                 
                    
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
                    <a class="block-2-item" href="shoptyp.php?type=Dame 36/41">
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
                    <a class="block-2-item" href="shoptyp.php?type=Enfant 29/34">
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
                    <a class="block-2-item" href="shoptyp.php?type=Homme 40/44">
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