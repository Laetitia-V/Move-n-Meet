<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Se connecter</title>
 <meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />
<link rel="stylesheet"	href="styles/mep.css"	type="text/css"	
media="screen"	/>

<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
	$mail=$_GET['mail'];
	$mdp=$_GET['mdp'];
	$sql= ("Select * from utilisateur where utilisateur.Mail='".$mail."'");
	$rep = $bdd->query($sql);
	$ligne=$rep ->fetch();
	
	if(isset($ligne['Mail']) AND $ligne['Mdp']==$mdp){
		
		$id=$ligne['Id_utilisateur'];
		$nom=$ligne['Nom'];
		$prenom=$ligne['Prenom'];
		$date_naissance=$ligne['Date_naissance'];
		$sexe=$ligne['Sexe'];
		$description=$ligne['Description'];
		$photo=$ligne['Photo'];
		
		$_SESSION['utilisateur']=array($id,$nom,$prenom,$date_naissance,$sexe,$description,$photo,$mail,$mdp);
		
		echo "<meta http-equiv='refresh' content='2; URL=../index.php'>";
	}
	else{
		echo "<meta http-equiv='refresh' content='2; URL=connecIns.php?mail=".$mail."'>";

	}
	$rep ->closeCursor();
	?>

</head>
<body>

 
</body>
</html>