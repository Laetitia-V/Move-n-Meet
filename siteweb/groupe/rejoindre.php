<?php
	session_start();
	$idGroupe=$_GET['id'];
	$idUser=$_SESSION['utilisateur'][0];
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>


<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVENEMENTS</a> </span>
</p>

// <?php
	
	
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
	$doublon = $bdd -> query("Select * from participant Where id_groupe='".$idGroupe."' AND id_utilisateur='".$idUser."'");
	//echo "Select * from participant Where id_groupe='".$idGroupe."' AND id_utilisateur='".$idUser."'";
	$d = $doublon -> fetch();
	if($d){
		echo "Vous êtes déja inscrit";
		
	}
	else{
	$rej = "INSERT INTO participant (Id_groupe, Id_utilisateur) VALUES ('".$idGroupe."','".$idUser."')";
	echo $rej;
	$req = $bdd->query($rej);
	$req -> closeCursor();
	echo "Vous avez bien rejoint l'activité de groupe ";
	}
	echo "<meta http-equiv='refresh' content='3; URL=../index.php'>";
	
 ?>

</body>
</html>