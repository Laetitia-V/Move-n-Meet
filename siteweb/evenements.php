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
 <?php
 	$req = $bdd->query('select * from evenement');
 	$req = $req->fetch();
 	//print_r($req);
 	
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


<p><?php echo $req['date']." : ".$req['horaire'] ?></p>
</body>
</html> 

