<!DOCTYPE html>
<html>
	<head>
		<title>Produse</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="CSS2.css">
		
		
	<script>
		nr=0;
		ok=1;
		function rating1(i){
			nume= "stea"+i;
			document.getElementById(nume+".1").src = "starf.jpg";
			if(ok==1){
				nr=1;
				document.getElementById(nume+".5").src = "stare.png";
				document.getElementById(nume+".4").src = "stare.png";
				document.getElementById(nume+".3").src = "stare.png";
				document.getElementById(nume+".4").src = "stare.png";
			}
			ok=1;
		}
		function rating2(i){
			nume= "stea"+i;
			document.getElementById(nume+".2").src = "starf.jpg";
			if(ok==1){
				nr=2;
				ok=0;
				document.getElementById(nume+".3").src = "stare.png";
				document.getElementById(nume+".4").src = "stare.png";
				document.getElementById(nume+".5").src = "stare.png";
			}
			rating1(i);
		}
		function rating3(i){
			nume= "stea"+i;
			document.getElementById(nume+".3").src = "starf.jpg";
			if(ok==1){
				nr=3;
				ok=0;
				document.getElementById(nume+".5").src = "stare.png";
				document.getElementById(nume+".4").src = "stare.png";
			}
			rating2(i);
		}
		function rating4(i){
			nume= "stea"+i;
			document.getElementById(nume+".4").src = "starf.jpg";
			if(ok==1){
				nr=4;
				ok=0;
				document.getElementById(nume+".5").src = "stare.png";
			}
			rating3(i);
		}
		function rating5(i){
			nume= "stea"+i;
			document.getElementById(nume+".5").src = "starf.jpg";
			if(ok==1){
				nr=5;
				ok=0;
			}
			rating4(i);
		}

		function stea0(i){
			nume= "stea"+i;
			document.getElementById(nume+".1").src = "stare.png";
			document.getElementById(nume+".2").src = "stare.png";
			document.getElementById(nume+".3").src = "stare.png";
			document.getElementById(nume+".4").src = "stare.png";
			document.getElementById(nume+".5").src = "stare.png";
		}
		function stea1(i){
			nume= "stea"+i;
			document.getElementById(nume+".1").src = "starf.jpg";
			document.getElementById(nume+".2").src = "stare.png";
			document.getElementById(nume+".3").src = "stare.png";
			document.getElementById(nume+".4").src = "stare.png";
			document.getElementById(nume+".5").src = "stare.png";
		}
		function stea2(i){
			nume= "stea"+i;
			document.getElementById(nume+".1").src = "starf.jpg";
			document.getElementById(nume+".2").src = "starf.jpg";
			document.getElementById(nume+".3").src = "stare.png";
			document.getElementById(nume+".4").src = "stare.png";
			document.getElementById(nume+".5").src = "stare.png";
		}
		function stea3(i){
			nume= "stea"+i;
			document.getElementById(nume+".1").src = "starf.jpg";
			document.getElementById(nume+".2").src = "starf.jpg";
			document.getElementById(nume+".3").src = "starf.jpg";
			document.getElementById(nume+".4").src = "stare.png";
			document.getElementById(nume+".5").src = "stare.png";
		}
		function stea4(i){
			nume= "stea"+i;
			document.getElementById(nume+".1").src = "starf.jpg";
			document.getElementById(nume+".2").src = "starf.jpg";
			document.getElementById(nume+".3").src = "starf.jpg";
			document.getElementById(nume+".4").src = "starf.jpg";
			document.getElementById(nume+".5").src = "stare.png";
		}
		function stea5(i){
			nume= "stea"+i;
			document.getElementById(nume+".1").src = "starf.jpg";
			document.getElementById(nume+".2").src = "starf.jpg";
			document.getElementById(nume+".3").src = "starf.jpg";
			document.getElementById(nume+".4").src = "starf.jpg";
			document.getElementById(nume+".5").src = "starf.jpg";
		}

		function back(i){
			if(nr==0){
				stea0(i);
			}
			else if(nr==1){
				rating1(i);
			}
			else if(nr==2){
				rating2(i);
			}
			else if(nr==3){
				rating3(i);
			}
			else if(nr==4){
				rating4(i);
			}
			else if(nr==5){
				rating5(i);
			}

		}
	</script>
	</head>

<body>
	<h1>Audio Center</h1>
	<ul class="navbar">
		<li><a href='Meniu.php'>Meniu Principal</a></li>
		<li><a href='Produse.php'>Produse</a>
		</li>
		<li class="right"><a class="active" href="Inregistrare.php">Înregistrare</a></li>
		<li class="right"><a class="active" href="Conectare.php">Conectare</a></li>
	</ul>
	
	<div class="lista">
		<h3> Beats By Dre Solo<sup>3 </sup></h3>
			<img src="14-Beats-By-Dre-Beats-Solo^3-Wireless-Matte-Black-iCare-Store.jpg" alt="Solo3">
			<table><tr>
			<td>
			<img src="stare.png" class="stea" id="stea1.1" onclick="rating1(1)" onmouseover="stea1(1)" onmouseout="back(1)">
			</td>
			<td>
			<img src="stare.png" class="stea" id="stea1.2" onclick="rating2(1)" onmouseover="stea2(1)" onmouseout="back(1)">
			</td>
			<td>
			<img src="stare.png" class="stea" id="stea1.3" onclick="rating3(1)" onmouseover="stea3(1)" onmouseout="back(1)">
			</td>
			<td>
			<img src="stare.png" class="stea" id="stea1.4" onclick="rating4(1)" onmouseover="stea4(1)" onmouseout="back(1)">
			</td>
			<td>
			<img src="stare.png" class="stea" id="stea1.5" onclick="rating5(1)" onmouseover="stea5(1)" onmouseout="back(1)">
			</td></tr></table>
		<h3> Audio Technica M50x</h3>
			<img src="ath-m50x_01_1.png" alt="M50x">
			<table><tr><td><img src="stare.png" class="stea" id="stea2.1" onclick="rating1(2)" onmouseover="stea1(2)" onmouseout="back(2)"></td>
				<td><img src="stare.png" class="stea" id="stea2.2" onclick="rating2(2)" onmouseover="stea2(2)" onmouseout="back(2)"></td>
				<td><img src="stare.png" class="stea" id="stea2.3" onclick="rating3(2)" onmouseover="stea3(2)" onmouseout="back(2)"></td>
				<td><img src="stare.png" class="stea" id="stea2.4" onclick="rating4(2)" onmouseover="stea4(2)" onmouseout="back(2)"></td>
				<td><img src="stare.png" class="stea" id="stea2.5" onclick="rating5(2)" onmouseover="stea5(2)" onmouseout="back(2)"></td></tr></table>
		<h3> Audio Technica AT2020</h3>
			<img src="Audio Technica AT2020.jpg" alt="AT2020">
			<table><tr><td><img src="stare.png" class="stea" id="stea3.1" onclick="rating1()" onmouseover="stea1(3)" onmouseout="back(3)"></td>
				<td><img src="stare.png" class="stea" id="stea3.2" onclick="rating2(3)" onmouseover="stea2(3)" onmouseout="back(3)"></td>
				<td><img src="stare.png" class="stea" id="stea3.3" onclick="rating3(3)" onmouseover="stea3(3)" onmouseout="back(3)"></td>
				<td><img src="stare.png" class="stea" id="stea3.4" onclick="rating4(3)" onmouseover="stea4(3)" onmouseout="back(3)"></td>
				<td><img src="stare.png" class="stea" id="stea3.5" onclick="rating5(3)" onmouseover="stea5(3)" onmouseout="back(3)"></td></tr></table>
		<h3> Sennheiser HD 450BT</h3>
			<img src="Sennheiser-hd-450bt.jpg" alt="450BT">
			<table><tr><td><img src="stare.png" class="stea" id="stea4.1" onclick="rating1(4)" onmouseover="stea1(4)" onmouseout="back(4)"></td>
				<td><img src="stare.png" class="stea" id="stea4.2" onclick="rating2(4)" onmouseover="stea2(4)" onmouseout="back(4)"></td>
				<td><img src="stare.png" class="stea" id="stea4.3" onclick="rating3(4)" onmouseover="stea3(4)" onmouseout="back(4)"></td>
				<td><img src="stare.png" class="stea" id="stea4.4" onclick="rating4(4)" onmouseover="stea4(4)" onmouseout="back(4)"></td>
				<td><img src="stare.png" class="stea" id="stea4.5" onclick="rating5(4)" onmouseover="stea5(4)" onmouseout="back(4)"></td></tr></table>
		<h3> Focusrite Scarlett 2i4</h3>
			<img src="Focusrite Scarlett 2i4.jpg" alt="Scarlett 2i4">
			<table><tr><td><img src="stare.png" class="stea" id="stea5.1" onclick="rating1(5)" onmouseover="stea1(5)" onmouseout="back(5)"></td>
				<td><img src="stare.png" class="stea" id="stea5.2" onclick="rating2(5)" onmouseover="stea2(5)" onmouseout="back(5)"></td>
				<td><img src="stare.png" class="stea" id="stea5.3" onclick="rating3(5)" onmouseover="stea3(5)" onmouseout="back(5)"></td>
				<td><img src="stare.png" class="stea" id="stea5.4" onclick="rating4(5)" onmouseover="stea4(5)" onmouseout="back(5)"></td>
				<td><img src="stare.png" class="stea" id="stea5.5" onclick="rating5(5)" onmouseover="stea5(5)" onmouseout="back(5)"></td></tr></table>
	</div>
	
	<h1 style= "margin-top:50px;">-Audio Center-</h1>
<body>
</html>	