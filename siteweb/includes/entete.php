<?php if(isset($_SESSION['utilisateur'])){
			echo "<a  id='connec' href='../connexion/deconnexion.php'> Déconnexion </a>";
			echo "<a href='../profil/profil_perso.php'> Mon profil </a>";
			}
			
	else{

	echo"<a id='connec' href='../connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }

?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>
