<?php
	session_start();
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

$sql= "SELECT * FROM type_act_groupe ";
$rep = $bdd->query($sql);
		
?>	


<form action='groupe_filtre.php' method='get' autocomplete='off'>

		<p> Rechercher une activité par type : 
		<SELECT name='type' size='1'> <?php while ($ligne = $rep ->  fetch () ){ echo "<OPTION value='".$ligne['Id_type']."'>".$ligne['Nom']."</OPTION>";}?> <///SELECT> 
		
		 <input type="submit" value="Rechercher"></p>
	
	</form>	

	<?php 
	
	// Bouton Creation
if(isset($_SESSION['utilisateur'])){
	echo('<p> <form action="creation.php" method="get" autocomplete="off">
	Lance toi et crée ton activité groupe pour faire de nouvelles rencontres !
		  <input type="submit" value="Creation">
	</form></p>'); 
}
else{
	echo ('<form action="../connexion/connecIns.php" method="get" autocomplete="off">
		  <input type="hidden" name="h" value="1">
		  <input type="submit" value="Creation">
	</form>');
}
		$rep = $bdd->query('select G.Id_groupe, G.Nombre_max, G.Titre, G.Adresse, G.Date, T.Id_type, G.Id_type, T.Photo from groupe G, type_act_groupe T WHERE G.Id_type=T.Id_type');
		//echo 'select G.Titre, G.Adresse, G.Date, T.Id_type, G.Id_type, T.Photo from groupe G, type_act_groupe T WHERE G.Id_type=T.Id_type';
		
		while ($ligne = $rep ->  fetch () ){
			echo '<div class="activite">';
            $idGroupe=$ligne['Id_groupe'];
            $count= $bdd-> query ('SELECT COUNT(Id_utilisateur) FROM participant WHERE Ordre=0 AND Id_groupe='.$idGroupe);
			$c= $count -> fetch();
            $nbParticipant=$c[0]."/".$ligne['Nombre_max'];
			echo "<h1><a href='sortie.php?id=".$idGroupe."'>".$ligne['Titre']."</a></h1><br/><img src='images/".$ligne['Photo']."'><h2>Lieu :</h2>"
			.$ligne['Adresse']."<br/><h2>Date :</h2>".$ligne['Date']."<br/><h2>Nombre de participants :</h2>".$nbParticipant;
			echo '</div>';
		}
		$rep -> closeCursor();
	?>

</body>
</html>