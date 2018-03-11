<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>

<body>
<p > <a id="connec" href="connecIns.html" >S'inscrire/Se connecter</a> </p>

<span><img src="images/logo-copie.png" alt="logo"></span>
<span><img src="images/titre.png" alt="titre"/></span>

<p class="onglets">
<span><a href="trouver_act.html"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="act_grp.html"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.html"> ÉVENEMENTS</a> </span>

<?php
$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
$manger="";
$boire="";
$sortir="";
$promener="";
$baigner='';
$cultiver="";
$sport="";
if (isset($_GET['Rechercher'])){
	if(isset($_GET['choix'])) {
		$tab = $_GET['choix'];
		$manger = in_array("mange",$tab) ? "checked" : "";
		$boire = in_array("bois",$tab) ? "checked" : ""; 
		$sortir = in_array("sors",$tab) ? "checked" : "";
		$promener = in_array("promene",$tab) ? "checked" : "";
		$cultiver = in_array("cultive",$tab) ? "checked" : "";
		$sport = in_array("pratique",$tab) ? "checked" : "";

	}
}
?>

</body>
</html>j