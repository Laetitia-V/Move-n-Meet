<?php


$n = isset($_GET['n']) ?  $_GET['n'] : "";
$p = isset($_GET['p']) ?  $_GET['p'] : "";
$mail = isset($_GET['mail']) ?  $_GET['mail'] : "";

$n = isset($_GET['n']) ?  $_GET['n'] : "" ;
$h = isset($_GET['h']) ?  $_GET['h'] : NULL;
?>


<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style_ins.css" type="text/css" media="screen" />
<title>Move n' Meet</title>


</head>

<body>
<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>



<div id="ins">
<p class="titre"> Inscription </p>
<form action="enregistrement.php" method="get" autocomplete="off">
      <p>
Nom :
            <input type="text" name="n" value="<?php echo $n?>"/>
      </p>
<p>
Prénom :
            <input type="text" name="p" value="<?php echo $p ?>"/>
      </p>
<p>

Adresse mail :
            <input type="text" name="mail" value="<?php echo $mail ?>"/>
      </p>
   
<p>
Mot de passe :
            <input type="password" name="mdp1" value=""/>
      </p>
      <p>
Confirmation du mot de passe :
            <input type="password" name="mdp2" value=""/>
      </p>
      
      <p class="bouton">
      <input type="submit" value="Inscription"></p>
</p>
</div>
</form>



<form action="connecter.php" method="get" autocomplete="off">
<div id="connec">
<p class="titre"> Connexion </p>
		<input type="hidden" name="h" value="<?php echo $h  ?>" />
      <p>
Adresse mail :
            <input type="text" name="mail" value="<?php echo $mail ?>"/>
      </p>
      <p>
Mot de passe :
            <input type="password" name="mdp" value=""/>
      </p>
     <p class="bouton">
      <input type="submit" value="Connexion">
</p>
</form> 


</body>