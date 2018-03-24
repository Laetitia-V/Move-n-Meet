<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"	href="styles/Style.css"	type="text/css"	
media="screen"	/>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<title>MovenMeet</title>
<?php
		
	if ($_POST['n']=="" || $_POST['p']=="" || $_POST['d']=="" ||$_POST['mdp1']==""||$_POST['mdp2']==""){
		echo "Un des champs obligatoire est vide";
		echo "<meta http-equiv='refresh' content='2; URL=modification.php'>";
	}
	elseif ($_POST['mdp1']!=$_POST['mdp2']){
		echo "Les mots de passe ne sont pas les mêmes";
		echo "<meta http-equiv='refresh' content='2; URL=modification.php'>";
	}
	else{

		$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
		
		if(isset($_FILES['profil']) AND !empty($_FILES['profil']['name'])) {
   			$tailleMax = 2097152;
   			$extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   			if($_FILES['profil']['size'] <= $tailleMax) {
      			$extensionUpload = strtolower(substr(strrchr($_FILES['profil']['name'], '.'), 1));
      			if(in_array($extensionUpload, $extensionsValides)) {
         			$chemin = "photo_profil/".$_POST['id'].".".$extensionUpload;
         			$resultat = move_uploaded_file($_FILES['profil']['tmp_name'], $chemin);
         			if($resultat) {
         				$profil=$_POST['id'].".".$extensionUpload;
         			} 
         			else {
            			$msg = "Erreur durant l'importation de votre photo de profil";
         			}
      			} 
      			else {
         			$msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      			}
   			} 
   			else {
      			$msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   			}
		}
		
		elseif($_SESSION['utilisateur'][6]!='default_H.png' && $_SESSION['utilisateur'][6]!='default.png' && $_SESSION['utilisateur'][6]!='default_F.png'){
			$profil=$_SESSION['utilisateur'][6];
		}
		
		elseif($_POST['genre']=='Femme' || ($_POST['genre']=='' && $_SESSION['utilisateur'][4]=='Femme')){
			$profil="default_F.png";
			$genre="Femme";
		}
		
		elseif($_POST['genre']=='Homme' || ($_POST['genre']=='' && $_SESSION['utilisateur'][4]=='Homme')){
			$profil="default_H.png";
			$genre="Homme";
		}
		
		$maj= "UPDATE utilisateur SET Nom='".$_POST['n']."', Prenom='".$_POST['p']."',
		Date_naissance='".$_POST['d']."',Sexe='".$genre."',Description='".$_POST['description']."',
		Mail='".$_POST['mail']."', Mdp='".$_POST['mdp1']."', Photo='".$profil."' WHERE Id_utilisateur='".$_POST['id']."'";
		//echo $sql;
		$rep = $bdd->query($maj);
		
		echo "<meta http-equiv='refresh' content='0; URL=connecIns.php'>" ;
	}
?>


</head>
<body>
	

</body>
</html>