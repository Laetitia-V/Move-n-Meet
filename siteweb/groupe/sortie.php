<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<p > <a id="connec" href="../connexion/connecIns.php" >S'inscrire/Se connecter</a> </p>
<span><a href="../index.php"> <img src="images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="images/titre.png" alt="titre"/></a></span>

<?php

	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
	$sql = ("SELECT * FROM groupe where Id_groupe='".$idGroupe."'");
	$rep = $bdd->query($sql);

	while ($ligne = $rep ->fetch()) {
				echo  "<h2>".$ligne['Titre']."</h2>";
				echo "Date : ".$ligne['Date']; 
				echo "Horaire : ".$ligne['Horaire'];
				echo "Lieu : ".$ligne['Adresse'];
				echo $ligne['Descriptif'];
			}	
	
	$rep -> closeCursor();	
	
?>