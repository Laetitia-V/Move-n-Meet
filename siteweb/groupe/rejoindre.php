<?php
	session_start();
	// $titre=$_GET['titre'];
	// $date=$_GET['date'];
	// $desc=$_GET['desc'];
	// $adr=$_GET['adr'];
	// $nbMax=$_GET['max'];
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
	$rej = "INSERT INTO participant (Id_groupe, Id_utilisateur) VALUES ('".$_GET['id']."','".$_SESSION['utilisateur'][0]."')";
	echo $rej;
	$req = $bdd->query($rej);
	$req -> closeCursor();
	echo "Vous avez bien rejoint l'activité de groupe ";
	echo "<meta http-equiv='refresh' content='3; URL=../index.php'>";
	
// ?>

</body>
</html>