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

<FORM>
<span class="select-wrapper">
<Select name="Type" >
<option>Restaurant/Bar</option>
<option>Culturel</option>
<option>Extérieur</option>
<option>Divers</option>
</select>
</span>
</FORM>

<p>Je cherche à : </p>
<FORM method="get" action="trouver.php" autocomplete="off">
Manger :<INPUT type="checkbox" name="genre" value=<?php echo $_GET['manger'] ?>><br />
Boire un verre :<INPUT type="checkbox" name="genre" value=<?php echo $_GET['boire'] ?>><br />
Sortir :<INPUT type="checkbox" name="genre" value=<?php echo $_GET['sortir'] ?>><br />
Me promener : <INPUT type="checkbox" name="genre" value=<?php echo $_GET['promener'] ?>><br />
Me baigner :<INPUT type="checkbox" name="genre" value=<?php echo $_GET['baigner'] ?>><br />
Me cultiver : <INPUT type="checkbox" name="genre" value=<?php echo $_GET['cultiver'] ?>><br />
Faire du sport :<INPUT type="checkbox" name="genre" value=<?php echo $_GET['sport'] ?>>
<INPUT type="submit" value="Rechercher">
</FORM> 

</body>
</html>