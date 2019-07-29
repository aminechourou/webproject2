<?php

class Categorie1
{
private $idcat1;
private $nomcat1;


function __construct($nomcat1)
{

$this->nomcat1=$nomcat1;
}
function getidcat1(){return $this->idcat1;}
function getnomcat1(){return $this->nomcat1;}
function setidcat1($idcat1){$this->idcat1=$idcat1;}
function setnomcat1($nomcat1){$this->nomcat1=$nomcat1;}
}
?>