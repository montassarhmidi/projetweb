<?PHP
include "../core/relationclientC.php";
$RelationclientC=new RelationclientC();
if (isset($_POST["id"])){
	$RelationclientC->supprimerRelationclient($_POST["id"]);
	header('Location: afficherRelationclient.php');
}

?>