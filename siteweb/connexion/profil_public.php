<?php
session_start()
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<?php
if(isset($_SESSION['utilisateur'])){
			echo "<a  id='connec' href='deconnexion.php'> Déconnexion </a>";
			echo "<a id='connec' href='profil_perso.php'> Mon profil </a>";
			}
			
	else{
	echo"<a id='connec' href='connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }
?>
<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>

<p class="ongletsPageA">
<span><a href="../trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="../groupe/groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="../evenements.php"> ÉVÈNEMENTS</a> </span>
</p>


<?php

$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
$sql= $bdd->query("SELECT * FROM utilisateur WHERE Id_utilisateur='".$_GET['id']."'");
while ($ligne = $sql ->  fetch () ){
	echo "<h2> Profil de ".$ligne['Prenom']."</h2>";
	echo "<p>".$ligne['Prenom']." ".$ligne['Nom']."</p><p>
		<img src='photo_profil/".$ligne['Photo']."' width=160 alt='photo profil'></p><p>
		Age : ".round((time()-strtotime($ligne['Date_naissance']))/ 3600 / 24 / 365)." ans</p><p> Sexe : ".
		$ligne['Sexe']."</p><p> Description : ".$ligne['Description']."</p>";
}

 ?>

 
