<?PHP
include "config.php";
class catalogueC {
function affichercatalogue ($catalogue){
		echo "id: ".$catalogue->getid()."<br>";
		echo "nom: ".$catalogue->getnom()."<br>";
		echo "fichier: ".$catalogue->getfichier()."<br>";
	}
	function ajoutercatalogue($catalogue){
		$sql="insert into catalogue (id,nom,fichier) values (:id, :nom,:fichier)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$catalogue->getid();
        $nom=$catalogue->getNom();
		$fichier=$catalogue->getfichier();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':fichier',$fichier);			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

		
	function afficherprods(){
		//$sql="SElECT * From catalogue e inner join formationphp.catalogue a on e.id= a.id";
		$sql="SElECT * From catalogue";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function affichercatalogues(){
		//$sql="SElECT * From catalogue e inner join formationphp.catalogue a on e.id= a.id";
		$sql="SElECT * From catalogue";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercatalogue($id){
		$sql="DELETE FROM catalogue where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercatalogue($catalogue,$id){
		$sql="UPDATE catalogue SET id=:idn, nom=:nom,fichier=:fichier WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idn=$catalogue->getid();
        $nom=$catalogue->getnom();
		$fichier=$catalogue->getfichier();
		$datas = array(':idn'=>$idn, ':id'=>$id, ':nom'=>$nom,':fichier'=>$fichier);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':fichier',$fichier);			
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercatalogue($id){
		$sql="SELECT * from catalogue where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecatalogues($quantite){
		$sql="SELECT * from catalogue where quantite=$quantite";
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