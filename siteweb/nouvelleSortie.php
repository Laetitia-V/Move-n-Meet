<?php
	session_start();
	$titre=$_GET['titre'];
	$date=$_GET['date'];
	$desc=$_GET['desc'];
	$adr=$_GET['adr'];
	$nbMax=$_GET['max'];
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<p > <a id="connec" href="../c/connecIns.php" >S'inscrire/Se connecter</a> </p>
<span><a href="pageA"> <img src="images/logo-copie.png" alt="logo"></a></span>
<span><a href="pageA"><img src="images/titre.png" alt="titre"/></a></span>
<?php
	
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
	$sql = "INSERT INTO groupe (Id_groupe, Date, Descriptif, Titre, Adresse, Nombre_max) VALUES (NULL,'".$date."','".$desc."','".$titre."','".$adr."','".$nbMax."')";
	$rep = $bdd->query($sql);
	$rep -> closeCursor();	
	
?>
<p class="onglets">
<span><a href="trouver_act.html"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="act_grp.html"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.html"> ÉVENEMENTS</a> </span>

</body>
</html>