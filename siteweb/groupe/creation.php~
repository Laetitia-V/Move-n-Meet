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
			echo "<a  id='connec' href='../connexion/deconnexion.php'> Déconnexion </a>";
			echo "<a href='../connexion/profil_perso.php'> Mon profil </a>";
			}
			
	else{
	echo"<a  id='connec' href='../connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }
?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>


<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVENEMENTS</a> </span>
</p>
<?php 
$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
		$sql= "SELECT * FROM type_act_groupe ";
		$rep = $bdd->query($sql);
		
?>		
<form action='newS.php' method='get' autocomplete='off'>
<input type='hidden' name='id' >
<input type='hidden' name='createur' value='<?php echo $_SESSION['utilisateur'][0] ?>'/>
		<p> Type :
		<SELECT name='type'> 
		<?php while ($ligne = $rep -> fetch () ){ 
					echo "<OPTION value='".$ligne['Id_Type']."'>".$ligne['Nom']."</OPTION>";}
		?> </SELECT> 
		</p>
		  <p>
	Titre :
				<input type='text' name='titre' value=''/>
		  </p>
		  <p>
	Date :
				<input type='date' name='date' value='jj/mm/aaaa'/>
		  </p>
		  <p>
	Horaire : 
				<input type='time' name='heure'/>
		</p>
		  <p>

	Description :
				<TEXTAREA name='description' rows=4 COLS=40></TEXTAREA>
		  </p>
	   
		   <p>
	Adresse :
				<input type='text' name='adr' value=''/>
		  </p>
		  <p>
	Nombre de participants  :
				<input type='number' name='max' value=''/>
		  </p>
		  
		  <p class='bouton'>
		  <input type='submit' value='Ajouter'></p>
		  
</form>

