<?php
	session_start();
    $bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
    $idUser=$_SESSION['utilisateur'][0];
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
    <script	type="text/javascript">
        function affiche_message(e){
    var p=document.getElementById(e);
    p.style = "display: block;" ;}
    </script>
<title>Move n' Meet</title>
</head>

<body>
    
<?php include("../includes/entete.php"); ?>

<?php include("../includes/menu.php"); ?>
    
    <h2> Mes Messages </h2>

<?php
    $sql= $bdd -> query ("SELECT * FROM message WHERE Id_receveur='".$idUser."'");
    while($mess= $sql -> fetch ()){
        $idEnvoyeur=$mess['Id_envoyeur'];
        $req= $bdd -> query ("SELECT * FROM utilisateur WHERE Id_utilisateur='".$idEnvoyeur."'");
        $env= $req -> fetch();
        $de= $env['Mail'];
        echo '<div class="mess" onclick=affiche_message("messp")>';
        echo '<p > <strong>DE</strong> :  '.$de.'    <strong>Objet</strong> : '.$mess['Objet'].'</p>';
        echo '<div id="messp">';
        echo "<p>".$mess['Message']." <a class='reponse' href='envoiMessage.php?idReceveur=".$idEnvoyeur."'>Repondre</a></p>";
        echo '</div>';
        echo '</div>';
   
    }
    
?>


</body>
</html>