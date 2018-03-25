<?php
	session_start();
    $bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
    $statut=isset($_SESSION['utilisateur'][9]) ? $_SESSION['utilisateur'][9] : NULL;
    $idUser=isset($_SESSION['utilisateur'][0]) ? $_SESSION['utilisateur'][0] : NULL;
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
    
 <?php  // Supprimer sortie par admin uniquement
   
    if($statut=='1'){
        echo('<form action="supprimerSortie.php" method="get" autocomplete="off">		  
		  <input type="hidden" name="id" value="'.$_GET['id'].'">
		  <input type="submit" value="Supprimer sortie">
	</form>');
    }
    ?>   
    
        
<?php

	
	$sql = ("SELECT * FROM groupe where Id_groupe='".$_GET['id']."'");
	$rep = $bdd->query("SELECT * FROM groupe where Id_groupe='".$_GET['id']."'");

	while ($ligne = $rep ->fetch()) {
				echo  "<h1>".$ligne['Titre']."</h1>";
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
	$participants= ("SELECT U.Id_utilisateur, U.Prenom, U.Date_naissance, U.Photo FROM participant P, utilisateur U WHERE P.Id_utilisateur=U.Id_utilisateur AND Ordre=0 AND P.Id_groupe='".$_GET['id']."'");
	$aff=$bdd->query($participants);
	
    $inscrit=0;
    while ($ligne = $aff ->fetch()) {
				echo "<p><a href='../profil/profil_public.php?id=".$ligne['Id_utilisateur']."'> 
				<img width=120 src='../profil/photo_profil/".$ligne['Photo']."' alt='profil' </img>
				</a><a href='../profil/profil_public.php?id=".$ligne['Id_utilisateur']."'> "
				.$ligne['Prenom']."</a> ".round((time()-strtotime($ligne['Date_naissance']))/ 3600 / 24 / 365)." ans</br>";
        
                if($ligne['Id_utilisateur']==$idUser){
                    $inscrit=1;
                }
	}
    $aff -> closeCursor();
    
?>
        <p> Liste d'attente : </p>
<?php
    
    $participants= ("SELECT U.Id_utilisateur, U.Prenom, U.Date_naissance, U.Photo FROM participant P, utilisateur U WHERE P.Id_utilisateur=U.Id_utilisateur AND Ordre>0 AND P.Id_groupe='".$_GET['id']."' ORDER BY Ordre");
	$aff=$bdd->query($participants);
	
    
    $i=0;
    while ($ligne = $aff ->fetch()) {
                $i++;
				echo "<strong>".$i."</strong>   <a href='../profil/profil_public.php?id=".$ligne['Id_utilisateur']."'> 
				<img width=120 src='../profil/photo_profil/".$ligne['Photo']."' alt='profil' </img>
				</a><a href='../profil/profil_public.php?id=".$ligne['Id_utilisateur']."'> "
				.$ligne['Prenom']."</a> ".round((time()-strtotime($ligne['Date_naissance']))/ 3600 / 24 / 365)." ans</br>";
        
                if($ligne['Id_utilisateur']==$idUser){
                    $inscrit=1;
                }
	}
    $aff -> closeCursor();
        
	// Bouton Inscription

if(isset($_SESSION['utilisateur'])){
    if($inscrit==1){
	echo('<form action="desinscrire.php" method="get" autocomplete="off">		  
		  <input type="hidden" name="id" value="'.$_GET['id'].'">
		  <input type="submit" value="Se désinscrire">
	</form>');}
    else{
    echo('<form action="rejoindre.php" method="get" autocomplete="off">		  
		  <input type="hidden" name="id" value="'.$_GET['id'].'">
		  <input type="submit" value="Rejoindre">
	</form>'); }
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
		  
		  
		  <p>
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