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
echo "Bonjour ".$_SESSION['utilisateur'][1]."";
			echo "<a href='deconnexion.php'> deconnexion </a>";
			}
			
	else{
	echo "<a id='connec' href='connecIns.php' > S'inscrire/Se connecter </a>"; }
?>

<span><img src="images/logo-copie.png" alt="logo"></span>
<span><img src="images/titre.png" alt="titre"/></span>

<p class="ongletsPageA">
<span><a href="trouver_act.html"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="act_grp.html"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.html"> ÉVENEMENTS</a> </span>


<form>
<input type="texte" name="Bar, restaurant, événement,..." id=texte />
</form>
</p>

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