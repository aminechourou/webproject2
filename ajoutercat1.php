<?php
include "../core/categorieC1.php";
include "../entities/categori1.php";
if(isset($_GET['nomcat1']))
{
$nomcat1=$_GET['nomcat1'];

if(!empty($_GET['nomcat1']))
{$categorieC1=new CategorieC1();
$liste=$categorieC1->recupererCategorie2($_GET['nomcat1']);
$s=0;
foreach($liste as $row){
$s++;}
if($s==0)
{
	$categorieC1=new CategorieC1();

$c=new Categorie1($nomcat1);
$categorieC1=new CategorieC1();
$categorieC1->ajouterCategorie1($c);

 echo '<body onLoad="alert(\'Catégorie ajoutée avec succées...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=affichercategorie1.php">';
}
else if ($s!=0){ echo '<body onLoad="alert(\'le nom :'.$nomcat1.' existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=ajoutcat1.php">';}
}}
else 
{
echo "Veuillez remplir correctement tous les champs";
} ?>