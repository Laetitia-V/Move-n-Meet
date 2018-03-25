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
    



<?php include("../includes/entete.php"); ?>
    
    
<?php include("../includes/menu.php"); ?>

<table border="1">

<tr><th>Date</th><th>Activité</th><th>Créateur</th><th>Nombre de participants</th>
	<?php 
		$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
		$rep = $bdd->query("select distinct G.Nombre_max, G.Date, G.Titre, G.Adresse, G.Id_groupe from groupe G, type_act_groupe T where G.Id_type='".$_GET['type']."'");
		
		while ($ligne = $rep ->  fetch () ){
            $idGroupe=$ligne['Id_groupe'];
            $count= $bdd-> query ('SELECT COUNT(Id_utilisateur) FROM participant WHERE Ordre=0 AND Id_groupe='.$idGroupe);
			$c= $count -> fetch();
            $nbParticipant=$c[0]."/".$ligne['Nombre_max'];
			echo "<tr><td>".$ligne['Date']."</td><td><a href='sortie.php?id=".$idGroupe."'>".$ligne['Titre']."</a></td><td>".$ligne['Adresse']."</td><td>".$nbParticipant."</td></tr>";
		}
		$rep -> closeCursor();
	?>

</table> 

<a href='groupe.php'> Retour </a>

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