<?PHP
include "../core/categorieC1.php";
$categorieC1=new CategorieC1();
$categorieC1->supprimerCategorie1($_GET["nomcat1"]);
header('Location: affichercategorie1.php');

?>