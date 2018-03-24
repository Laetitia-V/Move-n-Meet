<?php
session_start()
?>
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
<?php if(isset($_SESSION['utilisateur'])){
	echo "<p class='bjr'>";
	echo "Bonjour ".$_SESSION['utilisateur'][2]." ".$_SESSION['utilisateur'][1]." !";
	
	}
?>
<span><img src="images/logo-copie.png" alt="logo"></span>
<span><img src="images/titre.png" alt="titre"/></span>

<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="groupe/groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVÈNEMENTS</a> </span>
</p>

<?php
if(isset($_SESSION['utilisateur'])){
$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root', 'root'); 
	$act= "Select G.Titre, G.Date, G.Id_groupe from groupe G, participant P, utilisateur U where U.Id_utilisateur='".$_SESSION['utilisateur'][0]."' and P.Id_groupe=G.Id_groupe";
	//echo $act;
	$rep = $bdd->query($act);
	echo "</p><p> Vous vous êtes à l'activité de groupe";
	while ($ligne = $rep ->  fetch () ){
		echo "<a href=groupe/sortie.php?id='".$ligne['Id_groupe']."'>".$ligne['Titre']."</a> prévu le ".$ligne['Date'];
	}
}
	?>
<form id="recherche" method="get" action="resultat.php">
<input name="saisie" type="text" placeholder="Mots-Clefs..." required />
<input class="loupe" type="submit" value="" />
</form>
<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8',
'root', 'root'); 
?>
<h1> <p class="rose"> Nos coups de coeur </p>- Que faire à Montpellier et ses alentours?  </h1>
<?php
 	$req = $bdd->query('select * from exterieure where Bonplan="1" and Type="Randonnée"');
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
 		echo '<h1> Randonnée - ';
		echo $donne['Nom']."<br/>";
		echo "</h1>";
		echo "<img src='images/rando.jpg'>";
		echo "<h2>Longueur de : </h2>".$donne['Longueur']."<br/><h2> Durée : </h2>".$donne['Duree']."<br/><h2> Difficulté : </h2>".$donne['Difficulté']."<br/><h2>".$donne['Depart']."</h2><h2> Description : </h2>".$donne['Description'];
 		echo '</div>';
}
?>
<?php
 	$req = $bdd->query('select * from exterieure where Bonplan="1" and Type="Baignade en Rivière"');
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
 		echo '<h1>';
		echo $donne['Nom']."<br/>";
		echo "</h1>";
		echo "<img src='images/riv.jpg'><br/>";
		echo "<h2>Ville : </h2>".$donne['Ville']." <br/><h2>Distance :</h2>".$donne['Distance']."<br/><h2>Classement :</h2> ".$donne['Classement']."<br/><h2>Description :</h2>". $donne['Eau']."<br/>".$donne['Description'];
 		echo '</div>';
}
?>
<?php
 	$req = $bdd->query('select * from etablissement where Bonplan="1" ');
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
 		echo '<h1> Manger, boire - ';
		echo $donne['Nom']."<br/>";
		echo "</h1>";
		echo "<img src='images/boire.jpg'><br/>";
		echo $donne['Numéro']." ".$donne['Rue']." <br/>".$donne['Horaires']."<br/>".$donne['Cuisine'];
 		echo '</div>';
}
?>
<?php
 	$req = $bdd->query('select * from divers where Bonplan="1" ');
 	while($donne = $req->fetch()){
 		echo '<div class="activite">';
 		echo '<h1>';
		echo $donne['Nom']."<br/>";
		echo "</h1>";
		echo "<img src='images/boire.jpg'><br/>";
		echo $donne['Numéro']." ".$donne['Rue']." <br/>".$donne['Horaires']."<br/>";
 		echo '</div>';
}
?>
<?php
 	$req = $bdd->query('select * from culture where Bonplan="1" ');
 	while($donne = $req->fetch()){
 			echo '<div class="activite">';
			echo "<h1>".$donne['Nom']."<br/></h1>";
			echo "<img src='images/cultu.jpg'>";
			echo $donne['Numero_Rue']." ".$donne['Rue']." ".$donne['Ville']."<br/>";
 			echo '</div>';
}
?>

</body>
</html>