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
<?php 
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8',
'root', 'root'); 
?>
 
<body>
<?php include("../includes/entete.php"); ?>

<?php include("../includes/menu.php"); ?>  
 
    <?php
 	$req = $bdd->query('select * from evenement');
 	while($donne = $req->fetch()){
 		
echo '<div class="activite">';
echo'<h1>'.$donne['Nom'].'</h1><br/><img src='.$donne['Photo']."><h2>Lieu :</h2>".$donne['Lieu']."<br/><h2>Date :</h2>".$donne['Date']."<br/><h2>Type :</h2>".$donne['Type'];
echo '</div>';
}
?>

</body>
</html> 

