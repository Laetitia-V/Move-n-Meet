<?php
session_start()
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<?php
echo "<a  id='connec' href='../connexion/deconnexion.php'> Déconnexion </a></div>";
?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>

<?php include("../includes/menu.php"); ?>

   <form action="../messagerie/listeMessages.php" method="get" autocomplete="off">
		  <input type="submit" value="Mes messages">
	</form>
    
<h2> Modifier votre profil </h2>
<form action="modification.php" method="post" autocomplete="off" enctype="multipart/form-data"> 

	<input type="hidden" name="id" value="<?php echo $_SESSION['utilisateur'][0]?>"/>
<p>
Nom *
            <input type="text" name="n" value="<?php echo $_SESSION['utilisateur'][1]?>"/>
      </p>
<p>
Prénom *
            <input type="text" name="p" value="<?php echo $_SESSION['utilisateur'][2] ?>"/>
      </p>
<p>
Photo de profil 
            <input type="file" name="profil" value="<?php echo $_SESSION['utilisateur'][6] ?>"/>
      </p>
<p>
Date de naissance * 
			<input type="date" name="d" value="<?php echo $_SESSION['utilisateur'][3] ?>"/>
	</p>
	<p>
Homme 
<INPUT type="radio" id="genre" name="genre" value="Homme"><br/>
Femme 
<INPUT type="radio" id="genre" name="genre" value="Femme">
</p>
	<p>
Description
<TEXTAREA rows=8 COLS=50 name="description" >
<?php echo $_SESSION['utilisateur'][5] ?>
</TEXTAREA></p>
<p>

Adresse mail *
            <input type="email" name="mail" value="<?php echo $_SESSION['utilisateur'][7] ?>"/>
      </p>
   
<p>
Mot de passe *
            <input type="password" name="mdp1" value="<?php echo $_SESSION['utilisateur'][8] ?>"/>
      </p>
      <p>
Confirmation du mot de passe *
            <input type="password" name="mdp2" value=""/>
      </p>
      
 <p class="bouton">
      <input type="submit" value="Enregistrer"></p>
</p>
</form>
