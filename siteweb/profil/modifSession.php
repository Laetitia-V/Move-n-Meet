<?php
session_start(); 
$idUser=$_GET['id'];
$_SESSION = array();
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
	
	$sql= ("Select * from utilisateur where Id_utilisateur='".$idUser."'");
	$rep = $bdd->query($sql);
	$ligne=$rep ->fetch();
	
	
		
		$id=$ligne['Id_utilisateur'];
		$nom=$ligne['Nom'];
		$prenom=$ligne['Prenom'];
		$date_naissance=$ligne['Date_naissance'];
		$sexe=$ligne['Sexe'];
		$description=$ligne['Description'];
		$photo=$ligne['Photo'];
        $mail=$ligne['Mail'];
        $mdp=$ligne['Mdp'];
		
		$_SESSION['utilisateur']=array($id,$nom,$prenom,$date_naissance,$sexe,$description,$photo,$mail,$mdp);
	       echo $_SESSION['utilisateur'][1];
	$rep ->closeCursor();
       echo "<meta http-equiv='refresh' content='0; URL=profil_perso.php?id=".$idUser."'>" ;
	?>

</head>
<body>

 
</body>
</html>