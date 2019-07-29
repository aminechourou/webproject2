<?PHP
include "../core/categorieC.php";
$categorieC=new CategorieC();
$categorieC->supprimerCategorie($_GET["nomcat"]);
header('Location: affichercategorie.php');

?>