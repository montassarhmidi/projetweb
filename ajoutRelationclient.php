<?PHP
include "../entities/relationclient.php";
include "../core/relationclientC.php";

if (isset($_GET['Nom']) and isset($_GET['Prenom'])and isset($_GET['Email']) and isset($_GET['Adresse']) and isset($_GET['Gouvernorat']) and isset($_GET['Ville']) and isset($_GET['CodePostal']) and isset($_GET['Telephone']) and isset($_GET['Password'])){
$RelationclientC=new Relationclient(($_GET['Nom']),($_GET['Prenom']),($_GET['Email']),($_GET['Adresse']),($_GET['Gouvernorat']),($_GET['Ville']),($_GET['CodePostal']) ,($_GET['Telephone']) ,($_GET['Password']));


//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$RelationclientC=new RelationclientC();
$RelationclientC->ajouterRelationclient($RelationclientC);
header('Location: ../back/relationclient.php');
	}


else{
	echo "vérifier les champs";
}
//*/

?>