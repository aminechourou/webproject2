<?php

class Produit
{
private $idprod;
private $ref;
private $nomp;
private $prix;
private $etat;
private $couleur;
private $nomcat;
private $image;
private $date;
private $type;
private $nomcat1;

function __construct($ref,$nomp,$prix,$etat,$couleur,$nomcat,$image,$date,$type,$nomcat1)
{

$this->ref=$ref;
$this->nomp=$nomp;
$this->prix=$prix;
$this->etat=$etat;
$this->couleur=$couleur;
$this->nomcat=$nomcat;
$this->image=$image;
$this->date=$date;
$this->type=$type;
$this->nomcat1=$nomcat1;
}
function getidprod(){return $this->idprod;}
function getref(){return $this->ref;}
function getnomp(){return $this->nomp;}
function getprix(){return $this->prix;}
function getetat(){return $this->etat;}
function getcouleur(){return $this->couleur;}
function getnomcat(){return $this->nomcat;}
function getimage(){return $this->image;}
function getdate(){return $this->date;}
function gettype(){return $this->type;}
function getnomcat1(){return $this->nomcat1;}

function setref($ref){$this->ref=$ref;}
function setnomp($nomp){$this->nomp=$nomp;}
function setprix($prix){$this->prix=$prix;}
function setetat($etat){$this->etat=$etat;}
function setcouleur($couleur){$this->couleur=$couleur;}
function setnomcat($nomcat){$this->nomcat=$nomcat;}
function setimage($image){$this->image=$image;}
function setdate($date){$this->date=$date;}
function settype($type){$this->type=$type;}
function setnomcat1($nomcat1){$this->nomcat1=$nomcat1;}
}
?>