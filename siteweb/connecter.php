
<!DOCTYPE html>
<html>
<head>
 <title>Se connecter</title>
 <meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />
<link rel="stylesheet"	href="styles/mep.css"	type="text/css"	
media="screen"	/>

<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root', 'root'); 
	$rep=$bdd->query("SELECT * FROM utilisateur WHERE Nom=".$_GET.['n']. "AND Mdp=".$_GET.['mdp1']."'");
	$rep->closeCursor();
	if($_GET['n']=="" || $_GET['mdp1']=="";
				echo '<meta http-equiv="refresh" content="2; URL=connexion.php">';
	}
	else{
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root', 'root'); 
	$rep=$bdd->query("SELECT * FROM utilisateur WHERE Nom=".$_GET.['n']."'  AND Mdp=".$_GET['mdp1']."'" );
	while($ligne=$rep ->fetch()) {
		$id=$ligne['Id_utilisateur'];
		$nom=$ligne['Nom'];
		$prenom=$ligne['Prenom'];
		$date_naissance=$ligne['Date_naissance'];
		$sexe=$ligne['Sexe'];
		$description=$ligne['Description'];
		$photo=$ligne['Photo'];
		$pseudo=$ligne['Pseudo'];
		$mail=$ligne['Mail'];
		$mdp=$ligne['Mdp'];
	}
	$_SESSION['utilisateur']=array($id,$nom,$prenom,$date_naissance,$sexe,$description,$photo,$pseudo,$mail,$mdp);
	$rep->closeCursor();
		echo "Connexion en cours";
		echo "<meta http-equiv='refresh' content='2; URL=index.php'>";		
	}
	
	?>

</head>
<body>

 
</body>
</html>