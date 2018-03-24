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
			echo "<div class='bouton11'>";
			echo "<a class='bouton11' id='connec' href='../connexion/deconnexion.php'> Déconnexion </a>";
			echo "<a href='../connexion/profil.php'> Mon profil </a>";
			echo'</div>';
			}
			
	else{
	echo"<a class='bouton11' id='connec' href='../connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }
?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>


<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVENEMENTS</a> </span>
</p>

<form action="newS.php" method="get" autocomplete="off">
<input type='hidden' name='id' >
		  <p>
	Titre :
				<input type="text" name="titre" value=""/>
		  </p>
		  <p>
	Date :
				<input type="date" name="date" value="jj/mm/aaaa"/>
		  </p>
		  <p>

	Description :
				<input type="text" name="desc" value=""/>
		  </p>
	   
		   <p>
	Adresse :
				<input type="text" name="adr" value=""/>
		  </p>
		  <p>
	Nombre de participants  :
				<input type="number" name="max" value=""/>
		  </p>
		  
		  <p class="bouton">
		  <input type="submit" value="Ajouter"></p>
		  
</form>

</body>
</html>
