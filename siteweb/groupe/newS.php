<?php
	session_start();
	$titre=$_GET['titre'];
	$date=$_GET['date'];
	$desc=$_GET['description'];
	$adr=$_GET['adr'];
	$nbMax=$_GET['max'];
	$horaire=$_GET['heure'];
	$type=$_GET['type'];
	$createur=$_GET['createur'];
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<?php include("../includes/entete.php"); ?>

<?php include("../includes/menu.php"); ?>

<?php
	
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
	if($date<strftime("%Y-%m-%d à %H:%i",time())){
		echo "La date est déjà passée";
	}
	else{
	$sql = "INSERT INTO groupe (Id_groupe, Date, Descriptif, Titre, Adresse, Nombre_max, Horaire, Id_type, Id_Createur) 
	VALUES (NULL,'".$date."','".$desc."','".$titre."','".$adr."','".$nbMax."','".$horaire."','".$type."','".$createur."')";
	echo $sql ;
	$rep = $bdd->query($sql);
	$rep -> closeCursor();
	echo "Votre sortie a bien été enregistré";
    // Ajout du créateur dans la liste des participants
	echo "<meta http-equiv='refresh' content='3; URL=groupe.php'>";
	}
?>

</body>
</html>