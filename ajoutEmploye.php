<?PHP
include "../entities/employe.php";
include "../core/employeC.php";

if ((isset($_GET['Nom']) and isset($_GET['Prenom']) and isset($_GET['Email'])and isset($_GET['Adresse']) and isset($_GET['Gouvernorat']) and isset($_GET['Ville']) and isset($_GET['CodePostal']) and isset($_GET['Telephone']) and isset($_GET['Password'])){
$Relation_client=new Relationclient(($_GET['Nom']),($_GET['Prenom']),($_GET['Email']),($_GET['Adresse']), ($_GET['Gouvernorat']), ($_GET['Ville']), ($_GET['CodePostal']), ($_GET['Telephone']), ($_GET['Password']))
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$email=$_POST['Email'];
$arobase="@";
$p=".";
$y=strpos($email, $arobase);
$point=strpos($email, $p);
$l=strlen($email);
if($y!=0 && $p > $point+1 && $l-1 > $point){
$RelationclientC=new RelationclientC();
$RelationclientC->ajouterRelationclient($Relation_client);
header('Location: views/afficherEmploye.php');
	}else{
		echo" <script> alert(\" mail incorrect\") </script>";
	}
}else{
	echo "vérifier les champs";
}
//*/

?>