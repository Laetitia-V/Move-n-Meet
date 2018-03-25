<?php
	session_start();
    $idReceveur=$_GET['idReceveur']
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
</head>

<body>
    



<?php include("../includes/menu.php"); ?>
<?php include("../includes/menu.php"); ?>

    <form action="envoi.php" method="post" autocomplete="off">
     <input type="hidden" name="idReceveur" value="<?php echo $idReceveur ?>">
    <p>Objet :</p>
    <input type="text" name="objet" value="">
    <p>Message :</p>
    <TEXTAREA name="message" rows=8 COLS=60></TEXTAREA>
    <input type="submit" value="Envoyer">
    
    </form>

</body>
</html>