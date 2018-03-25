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
    

<?php if(isset($_SESSION['utilisateur'])){
			echo "<a  id='connec' href='../connexion/deconnexion.php'> Déconnexion </a>";
			echo "<a id='connec' href='../connexion/profil_perso.php'> Mon profil </a>";
			}
			
	else{

	echo"<a id='connec' href='../connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }

?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>

<p class="ongletsPageA">
<span><a href="../trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="../evenements.php"> ÉVÈNEMENTS</a> </span>

<table border="1">

<?php 
$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
$sql= "SELECT * FROM type_act_groupe ";
$rep = $bdd->query($sql);
		
?>	

<form action='groupe_filtre.php' method='get' autocomplete='off'>

		<p> Rechercher une activité par type : 
		<SELECT name='type' size='1'> <?php while ($ligne = $rep ->  fetch () ){ echo "<OPTION value='".$ligne['Id_type']."'>".$ligne['Nom']."</OPTION>";}?> </SELECT> 
		
		 <input type="submit" value="Rechercher"></p>
	</form>	
		
	<tr><th>Date</th><th>Activité</th><th>Nombre de participants</th>
	<?php 
		$rep = $bdd->query('select * from groupe');
		
		while ($ligne = $rep ->  fetch () ){
            $idGroupe=$ligne['Id_groupe'];
            $count= $bdd-> query ('SELECT COUNT(Id_utilisateur) FROM participant WHERE Ordre=0 AND Id_groupe='.$idGroupe);
			$c= $count -> fetch();
            $nbParticipant=$c[0]."/".$ligne['Nombre_max'];
			echo "<tr><td>".$ligne['Date']."</td><td><a href='sortie.php?id=".$idGroupe."'>".$ligne['Titre']."</td><td>".$nbParticipant."</td></tr>";
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