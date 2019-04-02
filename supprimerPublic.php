<?PHP
include "../core/publicC.php";
$PublicC=new PublicC();
if (isset($_POST["id"])){
	$PublicC->supprimerPublic($_POST["id"]);
	header('Location: afficherPublic.php');
}

?>