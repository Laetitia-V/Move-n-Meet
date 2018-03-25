<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
$Mail= $_GET['mail'];
$Pseudo= $_GET['pseudo'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"	href="styles/Style.css"	type="text/css"	
media="screen"	/>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<title>MovenMeet</title>
<?php
function enregistrer($n,$p,$mail,$mdp,$d,$photo,$pseudo,$bdd)
{		
		
		$sql= "INSERT INTO utilisateur (Id_utilisateur, nom, prenom, mail, mdp, date_naissance, Photo, Pseudo) VALUES (NULL,'".$n."','".$p."','".$mail."','".$mdp."','".$d."','".$photo."','".$pseudo."')";
		$rep = $bdd->query($sql);
		$rep -> closeCursor();
		
}


?>	
	

<?php
	if (round((time()-strtotime($_GET['d']))/ 3600 / 24 / 365)<18){
		echo "Vous devez avoir la majorité pour vous inscrire";
		echo "<meta http-equiv='refresh' content='2; URL=connecIns.php?n=".$_GET['n']."&p=".$_GET['p']."&mail=".$_GET['mail']."'>";
	}
	else{
        $req= $bdd-> query("SELECT Mail, Pseudo FROM utilisateur");

        while($l=$req-> fetch()){
            if($Pseudo==$l['Pseudo']){
                echo "Ce Pseudo n'est pas disponible";
                echo "<meta http-equiv='refresh' content='1; URL=connecIns.php'>" ;
            }
            if($Mail==$l['Mail'])
            {
                echo "Il existe déja un compte avec cet adresse email";
                echo "<meta http-equiv='refresh' content='1; URL=connecIns.php'>" ;
            }
            $req ->closeCursor();
        }
     if($_GET['n']=="" || $_GET['p']=="" || $_GET['mail']==""|| $_GET['d']=="" || $_GET['pseudo']=="" || $_GET['mdp1']==""||$_GET['mdp2']=="" ||$_GET['mdp1']!=$_GET['mdp2']){
	 echo "<meta http-equiv='refresh' content='2; URL=connecIns.php?n=".$_GET['n']."&p=".$_GET['p']."&mail=".$_GET['mail']."'>" ;		
	 }
	 else{
		enregistrer($_GET['n'],$_GET['p'],$_GET['mail'],$_GET['mdp1'],$_GET['d'],$_GET['profil'],$_GET['pseudo'],$bdd);
        $_SESSION['connect']=array($_GET['mail'],$_GET['mdp1']);	
		echo "<meta http-equiv='refresh' content='1; URL=connecter.php'>" ;
	 }}
?>


</head>
<body>
	

</body>
</html>