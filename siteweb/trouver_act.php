<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
<title>Move n' Meet</title>
<script language="JavaScript">
function afficherAutre(){
	var m=document.getElementById("rest");
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
		if(m.style.display=="none") 
				m.style.display="block";
		if(e.style.display=="none")
				e.style.display="block";		
		if(g.style.display=="none")
				g.style.display="block";	
		if(f.style.display=="none")
				f.style.display="block";		
		if(h.style.display=="none")
				h.style.display="block";				}
	else {
			m.style.display ="none";
			e.style.display="none";
			f.style.display="none";
			g.style.display="none";
			h.style.display="none";
		}
	if(document.getElementById("choix").checked==true){
		if(m.style.display=="none") 
				m.style.display="block";
		if(a.style.display=="none")
				a.style.display="block";		
		if(b.style.display=="none")
				b.style.display="block";	
		if(c.style.display=="none")
				c.style.display="block";		
		if(d.style.display=="none")
				d.style.display="block";				}
	else {
			m.style.display ="none";
			a.style.display="none";
			b.style.display="none";
			c.style.display="none";
			d.style.display="none";
		}
		if(document.getElementById("sortir").checked==true){
		if(m.style.display=="none") 
				m.style.display="block";
		if(i.style.display=="none")
				i.style.display="block";		
		if(j.style.display=="none")
				j.style.display="block";	
		if(k.style.display=="none")
				k.style.display="block";		
		if(l.style.display=="none")
				l.style.display="block";				}
	else {
			m.style.display ="none";
			i.style.display="none";
			j.style.display="none";
			k.style.display="none";
			l.style.display="none";
		}
		if(document.getElementById("baigner").checked==true){
		if(m.style.display=="none") 
				m.style.display="block";
		if(n.style.display=="none")
				n.style.display="block";		
		if(o.style.display=="none")
				o.style.display="block";	
		if(p.style.display=="none")
				p.style.display="block";		
		if(q.style.display=="none")
				q.style.display="block";		}		
	else {
			m.style.display ="none";
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

<p>Je cherche à : </p>

<FORM name="critere" method="GET" action="trouver.php" onChange="afficherAutre()" >
Manger :<INPUT type="radio" name="choix" id="choix" value="etablissement"> <br />
Boire un verre :<INPUT type="radio" name="choix" id="boire" value="etablissement"><br />
Sortir :<INPUT type="radio" name="choix" id="sortir" value="divers"><br />
Randonner : <INPUT type="radio" name="choix" id="promener" value="exterieure"><br />
Me baigner :<INPUT type="radio" name="choix" id="baigner" value="exterieure"><br />
Me cultiver : <INPUT type="radio" name="choix" id="choix5" value="culture"><br />
Faire du sport :<INPUT type="radio" name="choix" id="choix6" value="divers">
<INPUT type="submit" value="Rechercher">
<span id="rest" style="display: none"> Choisissez : </span><br/>
<span id="resto" style="display:none">Restaurant </span> <INPUT type= "radio" name="souschoix" id="sc1" value="restaurant" style="display: none"> <br/>
<span id="ff" style="display:none">Fast-food</span> <INPUT type="radio" name="souschoix" id="sc2" value="fast_food" style="display: none"><br/>

<span id="bar" style="display: none"> Bar </span><br/> <INPUT type="radio" name="souschoix" id="bar1" value="bar" style="display: none"> <br/>
<span id="cafe" style="display: none"> Café </span><br/> <INPUT type="radio" name="souschoix" id="cafe1" value="cafe" style="display: none"> <br/>

<span id="nuit" style="display: none"> Boîte de nuit </span><br/> <INPUT type="radio" name="souschoix" id="nuit1" value="nightclub" style="display: none"> <br/>
<span id="cine" style="display: none"> Cinema </span><br/> <INPUT type="radio" name="souschoix" id="cine1" value="cinema" style="display: none"> <br/>

<span id="riv" style="display: none"> Baignade en rivière </span><br/> <INPUT type="radio" name="souschoix" id="riv1" value="Baignade en Rivière" style="display: none"> <br/>
<span id="mer" style="display: none"> Baignade en mer </span><br/> <INPUT type="radio" name="souschoix" id="mer1" value="Baignade en Mer" style="display: none"> <br/>

</FORM>

</body>
</html>