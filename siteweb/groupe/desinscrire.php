<?php
	session_start();
	$idGroupe=$_GET['id'];
	$idUser=$_SESSION['utilisateur'][0];
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
<?php include("../includes/entete.php"); ?>


<?php include("../includes/menu.php"); ?>

 <?php
    $req = $bdd -> query("SELECT * FROM participant WHERE Id_groupe='".$idGroupe."' AND Id_utilisateur='".$idUser."'");
    $l= $req -> fetch();
    if($l['Ordre']==0){ //Ordre = 0 : Liste principale 
        $rep = $bdd->query("DELETE FROM participant WHERE Id_utilisateur='".$idUser."' AND Id_groupe='".$idGroupe."'");
        $req -> closeCursor();
        $req= $bdd-> query("SELECT Id_utilisateur, MIN(Ordre) AS m FROM participant WHERE Id_groupe='".$idGroupe."' AND Ordre>0 GROUP BY Id_utilisateur ORDER BY m LIMIT 1");
        $premierListe= $req -> fetch();
        $id=$premierListe['Id_utilisateur'];
        $ajoutListePrincipale= $bdd -> query ("UPDATE participant SET Ordre=0 WHERE Id_groupe='".$idGroupe."' AND Id_utilisateur='".$id."' ");
        $majOrdre= $bdd -> query ("UPDATE participant SET Ordre=Ordre-1 WHERE Id_groupe='".$idGroupe."' AND Ordre>0 ");
    }
    else{ // Liste d'attente
         $rep = $bdd->query("DELETE FROM participant WHERE Id_utilisateur='".$idUser."' AND Id_groupe='".$idGroupe."'");
    }
    
    
   
    
    echo "Vous avez bien été désinscrit.";
	echo "<meta http-equiv='refresh' content='2; URL=../index.php'>";
	
 ?>

</body>
</html> 