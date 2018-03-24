<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>

<?php if(isset($_SESSION['utilisateur'])){
			echo "<div class='bouton11'>";
			echo "<a class='bouton11' id='connec' href='../connexion/deconnexion.php'> Déconnexion </a>";
			echo "<a href='../connexion/profil.php'> Mon profil </a>";
			echo'</div>';
			}
			
	else{
	echo"<a class='bouton11' id='connec' href='../connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }
?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>

<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVENEMENTS</a> </span>
</p>

<p>
<?php

	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
	$sql = ("SELECT * FROM groupe where Id_groupe='".$_GET['id']."'");
	$rep = $bdd->query("SELECT * FROM groupe where Id_groupe='".$_GET['id']."'");

	while ($ligne = $rep ->fetch()) {
				echo  "<h2>".$ligne['Titre']."</h2>";
				echo "<p> Date : ".$ligne['Date']."</p>"; 
				echo "<p> Horaire : ".$ligne['Horaire']."</p>";
				echo "<p> Lieu : ".$ligne['Adresse']."</p>";
				echo "<p>".$ligne['Descriptif']."</p>";
			}		
	$rep -> closeCursor();
?>
</p>
<p> Membres inscrits à l'activité : </p>

<?php	
	$participants= ("SELECT U.Prenom, U.Date_naissance FROM participant P, utilisateur U WHERE P.Id_utilisateur=U.Id_utilisateur AND P.Id_groupe='".$_GET['id']."'");
	$aff=$bdd->query($participants);
	while ($ligne = $aff ->fetch()) {
				echo $ligne['Prenom']." ".round((time()-strtotime($ligne['Date_naissance']))/ 3600 / 24 / 365);
	}
    $rep -> closeCursor();
	// Bouton Inscription
if(isset($_SESSION['utilisateur'])){
	echo('<form action="rejoindre.php" method="get" autocomplete="off">		  
		  <input type="hidden" name="id" value="'.$_GET['id'].'">
		  <input type="submit" value="Rejoindre">
	</form>'); 
}
else{
	echo ('<form action="../connexion/connecIns.php" method="get" autocomplete="off">
		  <input type="hidden" name="h" value="2">
		  <input type="submit" value="Rejoindre">
	</form>');
}
	
?>
    
    <h2>Commentaires</h2>
    

    <form action="commentaireAjout.php" method="get" autocomplete="off">
      <input type='hidden' name='id' value='<?php echo $_GET['id'] ?>' >
		  <p>
	Commentaire :
              </p>
				<TEXTAREA name="commentaire" rows=8 COLS=50></TEXTAREA>
		  
		  
		  <p class="bouton">
		  <input type="submit" value="Publier"></p>
		  
</form>
  <?php  
    $req=$bdd ->query("SELECT * FROM commentaires WHERE Id_groupe='".$_GET['id']."'");
    while($com = $req -> fetch ()){
        echo $com['Auteur']."<br/>";
        echo $com['Date']."<br/><br/>";
        echo $com['Commentaire']."<br/><br/><br/>";
    }
    
?>
    </body>
</html>