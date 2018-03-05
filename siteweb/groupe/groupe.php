<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<p > <a id="connec" href="../c/connecIns.php" >S'inscrire/Se connecter</a> </p>
<span><a href="pageA"> <img src="images/logo-copie.png" alt="logo"></a></span>
<span><a href="pageA"><img src="images/titre.png" alt="titre"/></a></span>
<span><a href="trouver_act.html"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="act_grp.html"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.html"> ÉVENEMENTS</a> </span>

<?php

if(isset($_SESSION['utilisateur'])){
	echo('<form action="creation.php" method="get" autocomplete="off">
		  <input type="submit" value="Creation">
	</form>'); 
}
else{
	echo ('<form action="../connexion/connecIns.php" method="get" autocomplete="off">
		  <input type="submit" value="Creation">
	</form>');
}
?>

<table border="1">
	<?php 
		$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
		$rep = $bdd->query('select * from groupe');
		while ($ligne = $rep ->  fetch () ){
			echo "<tr><td>".$ligne['Date']."</td><td>".$ligne['Titre']."'>".$ligne['Descriptif']."</td><td>".$ligne['Adresse']."</td><td>".$ligne['Nombre_max']."</td></tr>";
		}
		$rep -> closeCursor();
	?>

</table> 




<p class="onglets">

</body>
</html>