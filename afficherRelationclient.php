<?PHP
include "../core/relationclientC.php";
$RelationclientC=new RelationclientC();
$listeEmployes=$RelationclientC->afficherRelationclient();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Prenom</td>
<td>Email</td>
<td>Adresse</td>
<td>Gouvernorat</td>
<td>Ville</td>
<td>CodePostal</td>
<td>Telephone</td>
<td>Password</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Prenom']; ?></td>
	<td><?PHP echo $row['Email']; ?></td>
	<td><?PHP echo $row['Adresse']; ?></td>
	<td><?PHP echo $row['Gouvernorat']; ?></td>
	<td><?PHP echo $row['Ville']; ?></td>
	<td><?PHP echo $row['CodePostal']; ?></td>
	<td><?PHP echo $row['Telephone']; ?></td>
	<td><?PHP echo $row['Password']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierEmploye.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


