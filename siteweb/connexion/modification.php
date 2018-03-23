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
		
	if ($_GET['n']=="" || $_GET['p']=="" || $_GET['d']=="" ||$_GET['mdp1']==""||$_GET['mdp2']==""){
		echo "Un des champs obligatoire est vide";
		echo "<meta http-equiv='refresh' content='1; URL=profil.php'>";
	}
	elseif ($_GET['mdp1']!=$_GET['mdp2']){
		echo "Les mots de passe ne sont pas les mêmes";
		echo "<meta http-equiv='refresh' content='1; URL=profil.php'>";
	}
	else{

		$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
		$sql= "UPDATE utilisateur SET Nom='".$_GET['n']."', Prenom='".$_GET['p']."',
		Date_naissance='".$_GET['d']."',Sexe='".$_GET['genre']."',Description='".$_GET['description']."',
		Mail='".$_GET['mail']."', Mdp='".$_GET['mdp1']."' WHERE Id_utilisateur='".$_GET['id']."'";
		//echo $sql;
		$rep = $bdd->query($sql);
		
				
		if (isset($_FILES['photo']) AND !empty($_FILES['photo']['name'])){
			$tailleMax=2097152;//limite taille 2Mo
			$extensionValid= array('jpg', 'jpeg', 'gif', 'png', 'pdf');
		
			if($_FILES['photo']['size']<=$tailleMax){
				$extensionUpload= strtolower(substr(strrchr($_FILES['photo']['name'],'.')), 1);
			
				if(in_array($extensionUpload, $extensionValid)){
					$chemin="photo_profil/".$_SESSION['utilisateur'][0].".".$extensionUpload;
					$resultat=move_uploaded_file($_FILES['photo']['tmp_name'],$chemin);
					if($resultat){
						$updatePhoto= $bdd->prepare('UPDATE utilisateur SET Photo=:photo WHERE Id_utilisateur= :id');
						$updatePhoto->execute(array(
							'photo' => $_GET['id'].".".$extensionUpload,
							'id' => $_GET['id'][0]));
						
					}
					else{
						echo "Erreur lors de l'importation de votre photo de profil";
					}
				}
				else{
					echo "Votre photo de profil doit être au format jpg, jpeg, gif, png ou pdf";
				}
			}
		
			else{
				echo "Votre photo de profil ne doit pas dépasser 2 Mo";
			}
		}
			
		/*
		$maj = $bdd->query("Select * from utilisateur where Id_utilisateur='".$_GET['id']."'");
	
		$ligne=$maj ->fetch();
		
		$id=$ligne['Id_utilisateur'];
		$nom=$ligne['Nom'];
		$prenom=$ligne['Prenom'];
		$date_naissance=$ligne['Date_naissance'];
		$sexe=$ligne['Sexe'];
		$description=$ligne['Description'];
		$photo=$ligne['Photo'];
		$mail=$ligne['mail'];
		$mdp=$ligne['mdp'];
		
		unset($_SESSION['utilisateur']);
		$_SESSION['utilisateur']=array($id,$nom,$prenom,$date_naissance,$sexe,$description,$photo,$mail,$mdp);
*/
		echo "<meta http-equiv='refresh' content='1; URL=connecIns.php'>" ;
	}
?>


</head>
<body>
	

</body>
</html>