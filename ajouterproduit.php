<?php
include "../core/produitC.php";
include "../entities/produit.php";
if(isset($_GET['ref']) && isset($_GET['nomp']) && isset($_GET['prix']) && isset($_GET['etat']) && isset($_GET['couleur']) && isset($_GET['nomcat']) && isset($_GET['image']) && isset($_GET['date']) && isset($_GET['type']) && isset($_GET['nomcat1']))
{
$ref=$_GET['ref'];
$nomp=$_GET['nomp'];
$prix=$_GET['prix'];
$etat=$_GET['etat'];
$couleur=$_GET['couleur'];
$nomcat=$_GET['nomcat'];
$date=$_GET['date'];
$type=$_GET['type'];
$nomcat1=$_GET['nomcat1'];
$image=substr($_GET['image'],35,strlen($_GET['image']));

if(!empty($_GET['ref']) && !empty($_GET['nomp']) && !empty($_GET['prix']) && !empty($_GET['etat']) && !empty($_GET['couleur']) && !empty($_GET['nomcat']) && !empty($_GET['image']) && !empty($_GET['type']) && !empty($_GET['nomcat1']))
{
$produitC=new ProduitC();
$liste=$produitC->recupererProduit($_GET['ref']);
$s=0;
foreach($liste as $row){
$s++;}
$liste1=$produitC->rechercherProd($_GET['nomp']);
$k=0;
foreach($liste1 as $ro){
$k++;}

if($k==0 && $s==0)
{
$produitC=new ProduitC(); 
$c=new Produit($ref,$nomp,$prix,$etat,$couleur,$nomcat,$image,$date,$type,$nomcat1);
$produitC=new ProduitC();
$produitC->ajouterProduit($c);

 echo '<body onLoad="alert(\'Produit ajouté avec succés...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=afficherproduit.php">';
}
else if ($s!=0){ echo '<body onLoad="alert(\'la reference: '.$ref.' existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=afficherproduit.php">';}
else if ($k!=0){ echo '<body onLoad="alert(\'le nom:'.$nomp.' existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=afficherproduit.php">';}
}}
else 
{
 echo '<body onLoad="alert(\'Remplir tous les champs correctement !\')">';
} ?>