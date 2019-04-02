<?PHP
include "../core/RelationclientC.php";
$RelationclientC=new RelationclientC();
if (isset($_POST["id"])){
	$RelationclientC->supprimerRelationclient($_POST["id"]);
	header('Location: afficherRelationclient.php');
}

?>