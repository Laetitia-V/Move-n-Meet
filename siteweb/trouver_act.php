<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
<script language="JavaScript">
function afficherAutre(){
	var a=document.getElementById("sc1");
	var b=document.getElementById("sc2");
	var c = document.getElementById("resto");
	var d = document.getElementById("ff");
	var e = document.getElementById("bar");
	var f = document.getElementById("cafe");
	var g = document.getElementById("bar1");
	var h = document.getElementById("cafe1");
	var i = document.getElementById("nuit");
	var j = document.getElementById("nuit1");
	var k = document.getElementById("cine");
	var l = document.getElementById("cine1");
	var n = document.getElementById("mer");
	var o = document.getElementById("mer1");
	var p = document.getElementById("riv");
	var q = document.getElementById("riv1");
	
	if(document.getElementById("boire").checked==true){
		if(e.style.display=="none")
				e.style.display="block";		
		if(g.style.display=="none")
				g.style.display="block";	
		if(f.style.display=="none")
				f.style.display="block";		
		if(h.style.display=="none")
				h.style.display="block";				}
	else {
			e.style.display="none";
			f.style.display="none";
			g.style.display="none";
			h.style.display="none";
		}
	if(document.getElementById("choix").checked==true){
		if(a.style.display=="none")
				a.style.display="block";		
		if(b.style.display=="none")
				b.style.display="block";	
		if(c.style.display=="none")
				c.style.display="block";		
		if(d.style.display=="none")
				d.style.display="block";				}
	else {
			a.style.display="none";
			b.style.display="none";
			c.style.display="none";
			d.style.display="none";
		}
		if(document.getElementById("sortir").checked==true){
		if(i.style.display=="none")
				i.style.display="block";		
		if(j.style.display=="none")
				j.style.display="block";	
		if(k.style.display=="none")
				k.style.display="block";		
		if(l.style.display=="none")
				l.style.display="block";				}
	else {
			i.style.display="none";
			j.style.display="none";
			k.style.display="none";
			l.style.display="none";
		}
		if(document.getElementById("baigner").checked==true){
		if(n.style.display=="none")
				n.style.display="block";		
		if(o.style.display=="none")
				o.style.display="block";	
		if(p.style.display=="none")
				p.style.display="block";		
		if(q.style.display=="none")
				q.style.display="block";		}		
	else {
			n.style.display="none";
			o.style.display="none";
			p.style.display="none";
			q.style.display="none";
		}
}


</script>
</head>

<body>


<p > <a id="connec" href="connecIns.html" >S'inscrire/Se connecter</a> </p>

<span><img src="images/logo-copie.png" alt="logo"></span>
<span><img src="images/titre.png" alt="titre"/></span>

<p class="onglets">
<span><a href="trouver_act.php"> TROUVER UNE ACTIVITÉ</a></span>
<span><a href="bons_plans.html">BONS PLANS </a></span>
<span><a href="groupe.php"> ACTIVITÉS DE GROUPE</a></span>
<span><a href="evenements.php"> ÉVENEMENTS</a> </span>

<FORM name="critere" method="GET" action="trouver_act.php" onChange="afficherAutre()" >
<div class="activite">
<p >Je cherche à : 
</p>
Manger :<INPUT type="radio" name="choix" id="choix" value="etablissement">  
<span id="resto" style="display:none">Restaurant </span> <INPUT type= "radio" name="souschoix" id="sc1" value="restaurant" style="display: none"> 
<span id="ff" style="display:none">Fast-food</span> <INPUT type="radio" name="souschoix" id="sc2" value="fast_food" style="display: none"><br/>

Boire un verre :<INPUT type="radio" name="choix" id="boire" value="etablissement"> 
<span id="bar" style="display: none"> Bar </span><INPUT type="radio" name="souschoix" id="bar1" value="bar" style="display: none"> 
<span id="cafe" style="display: none"> Café </span> <INPUT type="radio" name="souschoix" id="cafe1" value="cafe" style="display: none"> <br/>


Sortir :<INPUT type="radio" name="choix" id="sortir" value="divers">
<span id="nuit" style="display: none"> Boîte de nuit </span> <INPUT type="radio" name="souschoix" id="nuit1" value="nightclub" style="display: none"> 
<span id="cine" style="display: none"> Cinema </span> <INPUT type="radio" name="souschoix" id="cine1" value="cinema" style="display: none"> <br/>

Randonner : <INPUT type="radio" name="choix" id="promener" value="exterieure"><br />

Me baigner :<INPUT type="radio" name="choix" id="baigner" value="exterieure">
<span id="riv" style="display: none"> Baignade en rivière </span> <INPUT type="radio" name="souschoix" id="riv1" value="Baignade en Rivière" style="display: none">
<span id="mer" style="display: none"> Baignade en mer </span> <INPUT type="radio" name="souschoix" id="mer1" value="Baignade en Mer" style="display: none"> <br/>

Me cultiver : <INPUT type="radio" name="choix" id="choix5" value="culture"><br />
Faire du sport :<INPUT type="radio" name="choix" id="choix6" value="divers"> <br/>

<INPUT type="submit" value="Rechercher">

</div>
</FORM>

<?php
	$bdd = new PDO('mysql:host=localhost:8889;dbname=movenmeet;charset=utf8','root','root');
	//$choix=$_GET['choix'];
	//$souschoix=$_GET['souschoix'];
	if(isset($_GET['choix'])) {
		if(isset($_GET['souschoix'])){
			$choix=$_GET['choix'];
			$souschoix=$_GET['souschoix'];
			$reponse = $bdd->query('select * from  '.$choix.' where Type="'.$souschoix.'" ');
			while($donne = $reponse->fetch()){
				echo $donne['Nom']."<br/>";
		}
		}
		elseif(id['choix']=='promener'){
			$choix=$_GET['choix'];
			$reponse = $bdd->query('select * from exterieure where Type="Randonnée" ');
			while($donne = $reponse->fetch()){
				echo $donne['Nom']."<br/>";
				}
			}
		else {
			$choix=$_GET['choix'];
			$reponse = $bdd->query('select * from  '.$choix.' ');
			while($donne = $reponse->fetch()){
				echo '<div class="detail">'.$donne['Nom']."</div>";
				}
		}
	}
	?>


</body>
</html>