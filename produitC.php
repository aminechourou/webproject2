<?PHP
 $d=("Y-m-d");
include "../config.php";
class ProduitC {

	function ajouterProduit($produit){
		$sql="insert into produit (ref,nomp,prix,etat,couleur,nomcat,image,date,type,nomcat1) values (:ref,:nomp,:prix,:etat,:couleur,:nomcat,:image,:date,:type,:nomcat1)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $ref=$produit->getref();
        $nomp=$produit->getnomp();
        $prix=$produit->getprix();
        $etat=$produit->getetat();
        $couleur=$produit->getcouleur();
        $nomcat=$produit->getnomcat();
        $image=$produit->getimage();
        $date=$produit->getdate();
        $type=$produit->gettype();
         $nomcat1=$produit->getnomcat1();
		$req->bindValue(':ref',$ref);
		$req->bindValue(':nomp',$nomp);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':nomcat',$nomcat);
		$req->bindValue(':image',$image);
		$req->bindValue(':date',$date);
		$req->bindValue(':type',$type);
		$req->bindValue(':nomcat1',$nomcat1);
	   $req->execute();
         return true;  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage(); return false;
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($ref){
		$sql="DELETE FROM produit where ref= :ref";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref',$ref);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($produit,$ref){
		$sql="UPDATE produit SET ref=:reff,nomp=:nomp,prix=:prix,etat=:etat,couleur=:couleur,nomcat=:nomcat,image=:image,date=:date,type=:type,nomcat1=:nomcat1 WHERE ref=:ref";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $reff=$produit->getref();
        $nomp=$produit->getnomp();                              
        $prix=$produit->getprix();
        $etat=$produit->getetat();
        $couleur=$produit->getcouleur();
        $nomcat=$produit->getnomcat();
        $image=$produit->getimage();
         $date=$produit->getdate();
         $type=$produit->gettype();
         $nomcat1=$produit->getnomcat1();
    
		$datas = array(':reff'=>$reff, ':ref'=>$ref,':nomp'=>$nomp,':prix'=>$prix,':etat'=>$etat,':couleur'=>$couleur,':nomcat'=>$nomcat,':image'=>$image,':date'=>$date,':type'=>$type,':nomcat1'=>$nomcat1);
		$req->bindValue(':reff',$reff);
		$req->bindValue(':ref',$ref);
		$req->bindValue(':nomp',$nomp);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':nomcat',$nomcat);
		$req->bindValue('image',$image);
		$req->bindValue('date',$date);
		$req->bindValue('type',$type);
		$req->bindValue('nomcat1',$nomcat1);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
        
		
	
	function recupererProduit($ref){
		$sql="select * from produit where ref='$ref'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function recupererProduit1($idprod){
		$sql="select * from produit where idprod='".$idprod."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        		function recupererProduite(){
		$sql="select * from produit where etat='disponible'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererCouleur($couleur){
		$sql="select * from produit where couleur='".$couleur."' and etat='disponible'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function recupererDate(){
		$sql="SELECT * FROM `produit` WHERE etat='disponible' and date between SUBDATE(sysdate(),3) and sysdate()";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
			function recupererCat($type,$nomcat){
		$sql="select * from produit where type='".$type."'and nomcat='".$nomcat."' and etat='disponible'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
				function recupererCat9($nomcat1){
		$sql="select * from produit where nomcat1='".$nomcat1."' and etat='disponible'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
				function recupererCat1($type,$nomcat,$nomcat1){
		$sql="select * from produit where nomcat1='$nomcat1' and type='".$type."'and nomcat='".$nomcat."' and etat='disponible'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
			function recupererCat8($type,$nomcat1){
		$sql="select * from produit where type='".$type."'and nomcat1='".$nomcat1."' and etat='disponible'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
				function recupererType($type){
		$sql="select * from produit where type='".$type."' and etat='disponible'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
				function rechercherProd($nomp){
		$sql="select * from produit where nomp like '%$nomp%' and etat='disponible'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


}
?>