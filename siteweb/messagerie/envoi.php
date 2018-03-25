<?php
	session_start();
    $bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
    $idEnvoyeur=$_SESSION['utilisateur'][0];
    $idReceveur=$_POST['idReceveur']
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
    

<?php if(isset($_SESSION['utilisateur'])){
			echo "<a  id='connec' href='../connexion/deconnexion.php'> Déconnexion </a>";
			echo "<a href='../connexion/profil_perso.php'> Mon profil </a>";
			}
			
	else{

	echo"<a id='connec' href='../connexion/connecIns.php' >";
	echo "S'inscrire / Se connecter</a>";
	 }

?>

<span><a href="../index.php"> <img src="../images/logo-copie.png" alt="logo"></a></span>
<span><a href="../index.php"><img src="../images/titre.png" alt="titre"/></a></span>

<p class="ongletsPageA">
<span><a href="../trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="../evenements.php"> ÉVÈNEMENTS</a> </span>

    <?php   
            $objet=$_POST['objet'];
            $message=$_POST['message'];
            $sql= $bdd -> query ("INSERT INTO message (Id_message, Id_envoyeur, Id_receveur, Objet, Message) VALUES (NULL,'".$idEnvoyeur."','".$idReceveur."','".$objet."','".$message."')");
            echo "Votre message a bien été envoyé";
            echo "<meta http-equiv='refresh' content='2; URL=../index.php'>";
    ?>
    
</body>
</html>