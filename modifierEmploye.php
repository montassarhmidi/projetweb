<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_GET['id'])){
	$RelationclientC=new RelationclientC();
    $result=$RelationclientC->recupererRelationclient($_GET['id']);
	foreach($result as $row){
		$Nom=$row['Nom'];
		$Prenom=$row['Prenom'];
		$Email=$row['Email'];
		$Adresse=$row['Adresse'];
		$Gouvernorat=$row['Gouvernorat'];
		$Ville=$row['Ville'];
        $CodePostal=$row['CodePostal'];
        $Telephone=$row['Telephone'];
        $Password=$row['Password'];


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
<td>Prenom</td>
<td><input type="text" name="Prenom" value="<?PHP echo $Prenom ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="Email" value="<?PHP echo $Email ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="Adresse" value="<?PHP echo $Adresse ?>"></td>
</tr>
<tr>
<td></td>
<td>Gouvernorat</td>
<td><input type="text" name="Gouvernorat" value="<?PHP echo $Gouvernorat ?>"></td>
</tr>
<tr>
<td></td>
<td>Ville</td>
<td><input type="text" name="Ville" value="<?PHP echo $Ville ?>"></td>
</tr>
<tr>
<td></td>
<td>CodePostal</td>
<td><input type="number" name="CodePostal" value="<?PHP echo $CodePostal ?>"></td>
</tr>
<tr>
<td></td>
<td>Telephone</td>
<td><input type="text" name="Telephone" value="<?PHP echo $Telephone ?>"></td>
</tr>
<tr>
<tr>
<td></td>
<td>Password</td>
<td><input type="text" name="Password" value="<?PHP echo $Password ?>"></td>
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
	$Relationclient=new Relationclient($_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Adresse'],$_POST['Gouvernorat'],$_POST['Ville'],$_POST['CodePostal'],$_POST['Telephone'],$_POST['Password']);
	$RelationclientC->modifierRelationclient($Relationclient,$_GET['id']);
	echo $_GET['id'];
		header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>