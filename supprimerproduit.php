<?PHP
include "../core/produitC.php";
$produitC=new ProduitC();
$produitC->supprimerProduit($_GET["ref"]);
header('Location: afficherproduit.php');

?>