<?php

class Categorie
{
private $idcat;
private $nomcat;


function __construct($nomcat)
{

$this->nomcat=$nomcat;
}
function getidcat(){return $this->idcat;}
function getnomcat(){return $this->nomcat;}
function setidcat($idcat){$this->idcat=$idcat;}
function setnomcat($nomcat){$this->nomcat=$nomcat;}
}
?>