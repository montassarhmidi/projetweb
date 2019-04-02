<?PHP
include "../entities/public.php";
include "../core/publicC.php";
if (isset($_GET['id'])){
	$PublicC=new PublicC();
    $result=$PublicC->recupererPublic($_GET['id']);
	foreach($result as $row){
		$Nom=$row['Nom'];
		$Discri=$row['Discri'];
		


?>
<HTML>
<head>
</head>
<body>
<form method="POST">
<table>
<caption>Modifier Employe</caption>

<tr>
<td>Nom</td>
<td><input type="text" name="Nom" value="<?PHP echo $Nom ?>"></td>
</tr>
<tr>
<td>Discri</td>
<td><input type="text" name="Discri" value="<?PHP echo $Discri ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Public=new Public($_POST['id'],$_POST['Nom'],$_POST['Discri']);
	$PublicC->modifierPublic($Public,$_GET['id']);
	echo $_GET['id'];
		header('Location: afficherPublic.php');
}
?>
</body>
</HTMl>