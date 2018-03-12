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
		echo "<a href='../connexion/deconnexion.php'> deconnexion </a>";
			}
			
	else{
	echo "<a id='connec' href='../connexion/connecIns.php' > S'inscrire/Se connecter </a>"; }
?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>

<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="groupe/groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVENEMENTS</a> </span>


<table border="1">
	<?php 
		$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
		$rep = $bdd->query('select * from groupe');
		
		while ($ligne = $rep ->  fetch () ){
			$idGroupe=$ligne['Id_groupe'];
			echo "<tr><td>".$ligne['Date']."</td><td><a href='sortie.php?id=".$idGroupe."'>".$ligne['Titre']."</a></td><td>".$ligne['Descriptif']."</td><td>".$ligne['Adresse']."</td><td>".$ligne['Nombre_max']."</td></tr>";
		}
		$rep -> closeCursor();
	?>

</table> 

<?php
// Bouton Creation
if(isset($_SESSION['utilisateur'])){
	echo('<form action="creation.php" method="get" autocomplete="off">
		  <input type="submit" value="Creation">
	</form>'); 
}
else{
	echo ('<form action="../connexion/connecIns.php" method="get" autocomplete="off">
		  <input type="hidden" name="h" value="1">
		  <input type="submit" value="Creation">
	</form>');
}
?>


</body>
</html>