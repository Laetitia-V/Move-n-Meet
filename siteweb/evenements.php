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
<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8',
'root', 'root'); 
?>
 
<body>

<?php if(isset($_SESSION['utilisateur'])){
			echo "<div class='bouton11'>";
			echo "<a class='bouton11' id='connec' href='connexion/deconnexion.php'> Déconnexion </a>";
			echo "<a href='connexion/profil_perso.php'> Mon profil </a>";
			echo'</div>';
			}
			
	else{
	echo"<a class='bouton11' id='connec' href='connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }
?>

<span><a href="index.php"> <img src="images/logo-copie.png" alt="logo"></a></span>
<span><a href="index.php"><img src="images/titre.png" alt="titre"/></a></span>

<p class="onglets">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="groupe/groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVÈNEMENTS</a> </span>

</p>  <?php
 	$req = $bdd->query('select * from evenement');
 	while($donne = $req->fetch()){
 		
echo '<div class="activite">';
echo'<h1>'.$donne['Nom'].'</h1><br/><img src='.$donne['Photo']."><h2>Lieu :</h2>".$donne['Lieu']."<br/><h2>Date :</h2>".$donne['Date']."<br/><h2>Type :</h2>".$donne['Type'];
echo '</div>';
}
?>
</p>
</body>
</html> 

