<?php
	session_start();
	$idGroupe=$_GET['id'];
	$pseudo=$_SESSION['utilisateur'][10];
    $commentaire=$_GET['commentaire'];
    $bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<?php include("../includes/entete.php"); ?>s

<?php include("../includes/menu.php"); ?>

<?php
    
    
	$ajout = "INSERT INTO commentaires (Id_com, Id_groupe, Auteur, Commentaire, Date) VALUES 
	(NULL,'".$idGroupe."','".$pseudo."','".$commentaire."','".date('Y-m-d H:i:s')."')";
	$req = $bdd->query($ajout);
	//echo $ajout;
    $req ->closeCursor();
	//echo "Todo bem";
    
	
	echo "<meta http-equiv='refresh' content='2; URL=../index.php'>";
	
 ?>

</body>
</html> 