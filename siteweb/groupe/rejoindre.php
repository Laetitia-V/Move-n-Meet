<?php
	session_start();
	$idGroupe=$_GET['id'];
	$idUser=$_SESSION['utilisateur'][0];
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
<?php include("../includes/entete.php"); ?>

<?php include("../includes/menu.php"); ?>

 <?php
    $rep = $bdd->query("SELECT * FROM groupe where Id_groupe='".$_GET['id']."'");
    $ligne = $rep ->  fetch ();
    
	$count= $bdd-> query ('SELECT COUNT(Id_utilisateur) FROM participant WHERE Id_groupe='.$idGroupe);
    $c= $count -> fetch(); 
    $nbParticipant=$c[0];
    $nbMax=$ligne['Nombre_max'];
	
	
	$doublon = $bdd -> query("Select * from participant Where id_groupe='".$idGroupe."' AND id_utilisateur='".$idUser."'");
    $d = $doublon -> fetch();
	if($d){
		echo "Vous êtes déja inscrit";
		
	}
	elseif($nbParticipant<$ligne['Nombre_max']){
	$rej = "INSERT INTO participant (Id_groupe, Id_utilisateur) VALUES ('".$idGroupe."','".$idUser."')";
	$req = $bdd->query($rej);
	$req -> closeCursor();
	echo "Vous avez bien rejoint l'activité de groupe ";
	}
    else{
        $ordre=$nbParticipant-$nbMax+1;
        $listeAttente = "INSERT INTO participant (Id_groupe, Id_utilisateur, Ordre) VALUES ('".$idGroupe."','".$idUser."','".$ordre."')";
	    $la = $bdd->query($listeAttente);
	    $la -> closeCursor();
	    echo "Vous êtes bien inscrit sur liste d'attente";
    }
    
	echo "<meta http-equiv='refresh' content='10; URL=../index.php'>";
	
 ?>

</body>
</html> 