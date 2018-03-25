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
echo "<a  id='connec' href='../connexion/deconnexion.php'> Déconnexion </a></div>";
?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>

<?php include("../includes/menu.php"); ?>

<h2> Votre profil </h2>
<?php
$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
$sql= $bdd->query("SELECT * FROM utilisateur WHERE Id_utilisateur='".$_SESSION['utilisateur'][0]."'");
while ($ligne = $sql ->  fetch () ){

	echo "<p>".$ligne['Prenom']." ".$ligne['Nom']."</p><p>
		<img src='photo_profil/".$ligne['Photo']."' width=160 alt='photo profil'></p><p>
		Age : ".round((time()-strtotime($ligne['Date_naissance']))/ 3600 / 24 / 365)." ans</p><p> Sexe : ".
		$ligne['Sexe']."</p><p> Description : ".$ligne['Description']."</p><p>Adresse mail : ".
		$ligne['Mail']."<p/>";
}

$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root', 'root'); 
$ins = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root', 'root'); 
	$act= ("Select distinct G.Titre, G.Date, G.Id_groupe from groupe G, participant P, utilisateur U where P.Id_utilisateur='".$_SESSION['utilisateur'][0]."' and P.Id_groupe=G.Id_groupe");
	//echo "<p class='invicible'>".$act."</p>";
	//echo $act;
	echo "<p>Vous activités de groupe à venir :</p>";
	$rep = $bdd->query($act);
	while ($ligne = $rep ->  fetch () ){
		echo "<p> <a href='groupe/sortie.php?id=".$ligne['Id_groupe']."'>".$ligne['Titre']."</a> prévu le ".$ligne['Date']."</p>";
	}
	   

 ?>
    
    <form action="../messagerie/listeMessages.php" method="get" autocomplete="off">
		  <input type="submit" value="Mes messages">
	</form>
    
<form action="modifier.php" method="post" autocomplete="off" enctype="multipart/form-data"> 
	 <p class="bouton">
      <h2><input type="submit" value="Modifier votre profil"></p></h2>
</form>
</body>
 
