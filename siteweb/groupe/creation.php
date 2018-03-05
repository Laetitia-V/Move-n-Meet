<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<p > <a id="connec" href="../c/connecIns.php" >S'inscrire/Se connecter</a> </p>
<span><a href="pageA"> <img src="images/logo-copie.png" alt="logo"></a></span>
<span><a href="pageA"><img src="images/titre.png" alt="titre"/></a></span>

<form action="nouvelleSortie.php" method="get" autocomplete="off">

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
		  </p>
</form>
</div>






<p class="onglets">
<span><a href="trouver_act.html"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="act_grp.html"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.html"> ÉVENEMENTS</a> </span>
</body>
</html>
