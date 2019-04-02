<?PHP
include "../entities/public.php";
include "../core/publicC.php";

if ((isset($_GET['Nom']) and isset($_GET['Discri'])){
$Public=new Public(($_GET['Nom']),($_GET['Discri']))
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$PublicC=new PublicC();
$PublicC->ajouterPublic($Public);
header('Location: afficher.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>