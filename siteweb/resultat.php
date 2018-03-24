<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<?php if(isset($_SESSION['utilisateur'])){
			echo "<a  id='connec' href='connexion/deconnexion.php'> Déconnexion </a>";
			echo "<a href='connexion/profil_perso.php'> Mon profil </a>";
			}
			
	else{
	echo"<a id='connec' href='connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }
?>
<span><a href="index.php"> <img src="images/logo-copie.png" alt="logo"></a></span>
<span><a href="index.php"><img src="images/titre.png" alt="titre"/></a></span>

<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="groupe/groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVÈNEMENTS</a> </span>
</p>
<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8',
'root', 'root'); 
?><?php

if(isset($_GET["saisie"])){
	$saisie=$_GET["saisie"];
	$req = $bdd->query("select * from etablissement where Type LIKE '%$saisie%' ");
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
 		echo "<h1>".$donne['Nom']."</h1>";
 		echo "<img src='images/boire.jpg'><br/>";
 		echo $donne['Numéro']." ".$donne['Rue']." <br/><br/>".$donne['Horaires']."<br/><br/>".$donne['Cuisine'];
 		echo '</div>';
 		}
 		
 		} 
 ?>
 <?php

if(isset($_GET["saisie"])){
	$saisie=$_GET["saisie"];
	$req = $bdd->query("select * from exterieure where Type LIKE '%$saisie%' ");
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
 		echo "<h1>".$donne['Nom']."</h1>";
 		echo "<img src='images/rech.jpg'><br/>";
		echo $donne['Ville']." <br/><br/>".$donne['Distance']."<br/><br/>".$donne['Classement']."<br/><br/>". $donne['Eau']."<br/><br/>".$donne['Description'];
 		echo '</div>';
 		} 
 	}
 ?>
  <?php

if(isset($_GET["saisie"])){
	$saisie=$_GET["saisie"];
	$req = $bdd->query("select * from culture where Type LIKE '%$saisie%' ");
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
				echo "<h1>".$donne['Nom']."<br/></h1>";
				echo "<img src='images/rech.jpg'>";
				echo $donne['Numero_Rue']." ".$donne['Rue']." ".$donne['Ville']."<br/>";
				echo "</div>";
 		} 
 	}
 ?>
 <?php

if(isset($_GET["saisie"])){
	$saisie=$_GET["saisie"];
	$req = $bdd->query("select * from divers where Type LIKE '%$saisie%' ");
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
				echo "<h1>".$donne['Nom']."<br/></h1>";
				echo "<img src='images/rech.jpg'>";
				echo "</div>";
 		} 
 	}
 ?>
  <?php

if(isset($_GET["saisie"])){
	$saisie=$_GET["saisie"];
	$req = $bdd->query("select * from evenement where Type LIKE '%$saisie%' ");
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
echo'<h1>'.$donne['Nom'].'</h1><br/><img src='.$donne['Photo']."><h2>Lieu :</h2>".$donne['Lieu']."<br/><h2>Date :</h2>".$donne['Date']."<br/><h2>Type :</h2>".$donne['Type'];
=======
 	if($saisie !="%$saisie") {
 			echo "Pas de résultats trouvés";
 	}

echo '</div>';
 		} 
 	}
 ?>
 
 
</body>
</html>