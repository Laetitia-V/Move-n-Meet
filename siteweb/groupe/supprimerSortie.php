<?php
	session_start();
	$idGroupe=$_GET['id'];
    $bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"> </a></span>
<span><a href="../index.php"> <img src="../images/titre.png" alt="titre"/> </a></span>


<p class="ongletsPageA">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVENEMENTS</a></span>
</p>

 <?php
        
    $rep = $bdd->query("DELETE FROM groupe WHERE Id_groupe='".$idGroupe."'");
    
    
   
    
    echo "Sortie supprimé";
	echo "<meta http-equiv='refresh' content='2; URL=../index.php'>";
	
 ?>

</body>
</html> 