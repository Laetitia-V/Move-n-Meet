<?php
	session_start();
    $idReceveur=$_GET['idReceveur']
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

    <form action="envoi.php" method="post" autocomplete="off">
     <input type="hidden" name="idReceveur" value="<?php echo $idReceveur ?>">
    <p>Objet :</p>
    <input type="text" name="objet" value="">
    <p>Message :</p>
    <TEXTAREA name="message" rows=8 COLS=60></TEXTAREA>
    <input type="submit" value="Envoyer">
    
    </form>

</body>
</html>