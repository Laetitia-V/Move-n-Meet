<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>

<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=Vinno;charset=utf8',
'root', 'root'); 
?>

<p > <a id="connec" href="connecIns.html" >S'inscrire/Se connecter</a> </p>

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

<span><a href="pageA"> <img src="images/logo-copie.png" alt="logo"></a></span>
<span><a href="pageA"><img src="images/titre.png" alt="titre"/></a></span>

<p class="onglets">
<span><a href="trouver_act.html"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="act_grp.html"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.html"> ÉVENEMENTS</a> </span>