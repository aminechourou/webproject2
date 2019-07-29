<?php
include "../core/categorieC.php";
include "../entities/categorie.php";
if(isset($_GET['nomcat']))
{
$nomcat=$_GET['nomcat'];

if(!empty($_GET['nomcat']))
{$categorieC=new CategorieC();
$liste=$categorieC->recupererCategorie1($_GET['nomcat']);
$s=0;
foreach($liste as $row){
$s++;}
if($s==0)
{
	$categorieC=new CategorieC();

$c=new Categorie($nomcat);
$categorieC=new CategorieC();
$categorieC->ajouterCategorie($c);

 echo '<body onLoad="alert(\'Catégorie ajoutée avec succées...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=ajoutcate.php">';
}
else if ($s!=0){ echo '<body onLoad="alert(\'le nom :'.$nomcat.' existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=affichercategorie.php">';}
}}
else 
{
echo "Veuillez remplir correctement tous les champs";
} ?>