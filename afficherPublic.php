<?PHP
include "../core/publicC.php";
$PublicC=new PublicC();
$listeEmployes=$PublicC->afficherPublic();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Discri</td>

</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['discri']; ?></td>
	
	<td><form method="POST" action="supprimerPublic.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierPublic.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


