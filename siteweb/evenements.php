<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>
<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8',
'root', 'root'); 
?>
 
<body>
<p > <a id="connec" href="connecIns.html" >S'inscrire/Se connecter</a> </p>

<span><img src="images/logo-copie.png" alt="logo"></span>
<span><img src="images/titre.png" alt="titre"/></span>

<p class="onglets">
<span><a href="trouver_act.html"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="act_grp.html"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.html"> ÉVENEMENTS</a> </span>


<p>  <?php
 	$req = $bdd->query('select * from evenement');
 	while($donne = $req->fetch()){
 		
echo '<div class="activite">';
echo'<h2><div class="eve">'.$donne['Nom'].'</div></h2>';

echo "<img src='images/eve.jpg'><br/>";
echo "<h2>Lieu :</h2>".$donne['Lieu']."<br/><h2>Date :</h2>".$donne['Date']."<br/><h2>Horaire :</h2>".$donne['Horaire'];
echo '</div>';
}
?>
</p>
</body>
</html> 

