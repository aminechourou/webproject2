<?php
session_start();
include "../core/categorie1.php";
include "../entities/categorie.php";
include "../core/categorieC1.php";
include "../entities/categori1.php";
$categorieC=new CategorieC();
$r=$categorieC->recupererCategorie();
$categorieC1=new CategorieC1();
$r1=$categorieC1->recupererCategorie1();
$date=date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<script src="controle.js"></script>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexb.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">chourou<sup>depot</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="indexb.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Chourou Depot</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        VENDRE
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
    

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="indexb.php" data-toggle="collapse" data-target="#collapseCat" aria-expanded="true" aria-controls="collapseCat">
<i class="fas fa-store-alt"></i>

          <span>Catalogue</span>
        </a>
        <div id="collapseCat" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="afficherproduit.php">Produits</a>
            <a class="collapse-item" href="affichercategorie.php">Catégories</a>
            <a class="collapse-item" href="affichercategorie1.php">Catégories 1</a>
          </div>
        </div>
      </li>
  

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Chourou Mourad</span>
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produit</h1>
          </div>
          <!-- Content Row -->
          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <!-- Pie Chart -->
          </div>
          <!-- Content Row -->
          <div class="row">
            <!-- Content Column -->
            <div class="container-fluid">
              <!-- Page Heading -->
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">AJOUTER UN PRODUIT </h6>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div class="table-responsive">
                      <form method="get" action="ajouterproduit.php">
                        <table  width="60%" border="0px" cellspacing="0">
                          </tr>
                            <tr>
                              <td>Reference</td>
                              <td>
                                <input type="text" class="form-control form-control-user" width="30%" placeholder="donner une reference"
                                  name="ref" required>
                              </td>
                            </tr>
                            <tr>
                              <td>Nom</td>
                              <td>
                                <input type="text" class="form-control form-control-user" width="30%" placeholder="donner un nom"
                                  name="nomp" required>
                              </td>
                            </tr>
                            <tr>
                            <td>Prix</td>
                              <td>
                                <input type="number" class="form-control form-control-user" width="30%" placeholder="donner un prix"
                                  name="prix" required>
                              </td>
                            </tr>
                            <tr>
                            <td>Etat</td>
                                            <td><select class="form-control form-control-user"  width="30%"  size="1" name="etat" required>
                                  <option value = "">Choisir l'etat du produit</option>
                                  <option value="disponible">disponible</option>
                                  <option value="Non disponible">Non disponible</option>
                                 

          </select></td>
                            </tr>
                            <tr>
                              <td>Couleur</td>
                              <td><select class="form-control form-control-user"  width="30%"  size="1" name="couleur" required>
                                  <option value = "">Sélectionner une couleur</option>
                                  <option value="blanc">blanc</option>
                                  <option value="gris">gris</option>
                                    <option value="rouge">rouge</option>
                                    <option value="noir">noir</option>
                                    <option value="vert">vert</option>
                                    <option value="jaune">jaune</option>
                                    <option value="bleu">bleu</option>
                                      <option value="rose">rose</option>
                                       <option value="mauve">mauve</option>

          </select></td>
                            </tr>
                          
                          
                            <tr>
                              <td>Categorie</td>
                              <td><select class="form-control form-control-user"  width="30%"  size="1" name="nomcat" required>
 <?php foreach($r as $row) { ?>
  <option value="<?PHP echo $row['nomcat'];?>" name="nomcat"><?PHP echo $row['nomcat'];?></option>
<?php }?>
</select></td>
                            </tr>
                                            <tr>
                              <td>Categorie 1</td>
                              <td><select class="form-control form-control-user"  width="30%"  size="1" name="nomcat1" required>
 <?php foreach($r1 as $row) { ?>
  <option value="<?PHP echo $row['nomcat1'];?>" name="nomcat1"><?PHP echo $row['nomcat1'];?></option>
<?php }?>
</select></td>
                            </tr>
                              <tr>
                              <td>Date déposement</td>
                              <td>
                                <input type="date" class="form-control form-control-user" value="<?php echo $date ; ?>" placeholder="choisir la date"
                                  name="date" required readonly>
                              </td>
                            </tr>
                                         <tr>
                            <td>Type</td>
                                            <td><select class="form-control form-control-user"  width="30%"  size="1" name="type" required>
                                  <option value = "">Choisir le sexe</option>
                                  <option value="Bébé 18/22">Bébé 18/22</option>
                                  <option value="Fafi 23/28">Fafi 23/28</option>
                                  <option value="Enfant 29/34">Enfant 29/34</option>
                                  <option value="Cadet 35/38">Cadet 35/38</option>
                                  <option value="Dame 36/41">Dame 36/41</option>
                                  <option value="Homme 40/44">Homme 40/44</option>
                                 

          </select></td>
                            </tr>
                              <tr>
                              <td>Image</td>
                              <td>
                                <input type="file"  width="30%" placeholder="choisir une image"
                                  name="image" required>
                              </td>
                            </tr>
                            
                          <tr>
                            <td></td>
                            <td>
                              <input type="submit" name="ajouter" value="AJOUTER" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            </td>
                          </tr>
                        </table>
                      </form>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SNT 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="log-in.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
