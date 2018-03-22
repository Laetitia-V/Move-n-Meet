<?php
session_start()
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>

<?php if(isset($_SESSION['utilisateur'])){
			echo "<div class='bouton11'>";
			echo "<a class='bouton11' id='connec' href='connexion/deconnexion.php'> Déconnexion </a>";
			echo'</div>';
			}
			
	else{
	echo"<a class='bouton11' id='connec' href='connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }
?>

<span><img src="images/logo-copie.png" alt="logo"></span>
<span><img src="images/titre.png" alt="titre"/></span>

<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS</a></span>
<span><a href="groupe/groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVÈNEMENTS</a> </span>
</p>
<form id="recherche" method="post">
<input name="saisie" type="text" placeholder="Mots-Clefs..." required />
<input class="loupe" type="submit" value="" />
</form>
<?php if(isset($_SESSION['utilisateur'])){
echo "Bonjour ".$_SESSION['utilisateur'][1]." !";}
?>

<form id="recherche" method="post">
<input name="saisie" type="text" placeholder="Mots-Clefs..." required />
<input class="loupe" type="submit" value="" />
</form>



<FORM>
<span class="select-wrapper">
<Select name="Avec qui ?" >
<option>Avec qui ?</option>
<option>Famille</option>
<option>Amis</option>
</select>
</span>

<span class="select-wrapper">
<Select name="Pour ?" >
<option>Pour ?</option>
<option>Rencontres</option>
<option>Sport</option>
<option>Manger</option>
</select>
</span>


<span class="select-wrapper">
<Select name="Quand?" >
<option>Quand?</option>
<option>Toute la journée</option>
<option>Après-midi</option>
<option>Soir</option>
</select>
</span>
</form>

<span>
<p class="rechercher">Rechercher</p>
</span>


</body>
</html>