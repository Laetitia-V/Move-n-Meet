<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style_ins.css" type="text/css" media="screen" />
<title>Move n' Meet</title>


</head>

<body>
<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8', 'root', 'root'); 
?>
<span><a href="pageA"> <img src="images/logo-copie.png" alt="logo"></a></span>
<span><a href="pageA"><img src="images/titre.png" alt="titre"/></a></span>



<div id="ins">
<p class="titre"> Inscription </p>
<form action="enregistrement.php" method="get" autocomplete="off">
      <p>
Nom :
            <input type="text" name="n" value="<?php if(isset($_GET['n'])) echo $_GET['n']; ?>"/>
      </p>
<p>
Prénom :
            <input type="text" name="p" value="<?php if(isset($_GET['p'])) echo $_GET['p']; ?>"/>
      </p>
<p>

Adresse mail :
            <input type="text" name="mail" value="<?php if(isset($_GET['mail'])) echo $_GET['mail']; ?>"/>
      </p>
      <p>
      Homme :
<INPUT type="radio" name="genre" value="M"/><br /></p>
<p>
Femme :
<INPUT type="radio" name="genre" value="F"/>
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
<form action=".php" method="get" autocomplete="off">
      <p>
Adresse mail :
            <input type="text" name="mail" value="<?php if(isset($_GET['mail'])) echo $_GET['mail']; ?>"/>
      </p>
      <p>
Mot de passe :
            <input type="password" name="mdp1" value=""/>
      </p>
     <p class="bouton">
      <input type="submit" value="Connexion">
</p>
</form> 


</body>