
<html>
	<body>


		<form method="post" action="insert.php">
			<label>Nom</label> <input type="text" name="nom" id="nom">
			<label>Prénom</label> <input type="text" name="prenom" id="prenom">
			<label>Tel</label> <input type="text" name="tel" id="tel">
			<input type="submit" value="Ajouter">
        </form>

		



<!-- LIRE/AFFICHER LES DONNES-->
     <?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'Root', 'Simplon974');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table info
$reponse = $bdd->query('SELECT * FROM info');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
   
   <table width="630" >
<tr >
 
<td width="152"><strong>Nom</strong> : <?php echo $donnees['nom']; ?></td>
<td width="152"><strong>Prenom</strong> :<?php echo $donnees['prenom']; ?></td>
<td width="248"><strong>Tel</strong> : <?php echo $donnees['tel']; ?></td>
<td><a href="index.php">Supprimer</a></td>
<td><a href="index.php" >Modifier</a></td>
</tr>

</table>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>
	</html>
