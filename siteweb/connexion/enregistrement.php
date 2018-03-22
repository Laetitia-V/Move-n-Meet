<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"	href="styles/Style.css"	type="text/css"	
media="screen"	/>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<title>MovenMeet</title>
<?php
function enregistrer($n,$p,$mail,$mdp,$d)
{		
		$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
		$sql= "INSERT INTO utilisateur (Id_utilisateur, nom, prenom, mail, mdp, date_naissance) VALUES (NULL,'".$n."','".$p."','".$mail."','".$mdp."','".$d."')";
		$rep = $bdd->query($sql);
		$_SESSION['utilisateur']=array($n, $p, $mail, $mdp);	
		$rep ->closeCursor();
		
}


?>	
	

<?php
     if($_GET['n']=="" || $_GET['p']=="" || $_GET['mail']==""|| $_GET['d']=="" ||$_GET['mdp1']==""||$_GET['mdp2']=="" ||$_GET['mdp1']!=$_GET['mdp2']){
	 echo "<meta http-equiv='refresh' content='2; URL=connecIns.php?n=".$_GET['n']."&p=".$_GET['p']."&mail=".$_GET['mail']."'>" ;
		
	 }
	 else{
		enregistrer($_GET['n'],$_GET['p'],$_GET['mail'],$_GET['mdp1'],$_GET['d']);
		echo "<meta http-equiv='refresh' content='1; URL=../index.php'>" ;
	 }
?>


</head>
<body>
	

</body>
</html>