<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Audio Center</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="CSS1.css">
		<script type="text/javascript">
			var myVar = setInterval(myTimer, 1000);
			function myTimer() {
			  var d = new Date();
			  var t = d.toLocaleTimeString();
			  document.getElementById("demo").innerHTML = t;
			}
		</script>
	</head>

<body>
	<h1>Audio Center</h1>
	<ul class="navbar" style="z-index: 1">
		<li><a href='Meniu.php'>Meniu Principal</a></li>
		<li><a href='Produse.php'>Produse</a>
		</li>
		<li class="right"><a class="active" href="Inregistrare.php">Înregistrare</a></li>
		<li class="right"><a class="active" href="Conectare.php">Conectare</a></li>
	</ul>
	<div class="descriere">
		<?php if(isset($_SESSION['succes'])): ?>
			<p>
				<?php 
					echo $_SESSION['success'];
					unset($_SESSION['success']);
			 	?>
		<?php endif ?>

		<?php if (isset($_SESSION['username'])): ?>
			<p style="font-family: Arial"><?php echo $_SESSION['success']?>!</p>
			<p style="font-family: Arial"> Bine ai venit pe Audio Center <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="Conectare.php?logout='1'" style="color:red; font-family: Arial"> Delogare</a></p>
		<?php else: ?>
			<p style="font-family: Arial"> Bine ai venit pe Audio Center <p>
		<?php endif ?>
		<p>Este ora: </p>
		<p id="demo">00:00:00</p>
	</div>
		<h1 style= "margin-top:9.5%;">-Audio Center-</h1>
<body>
</html>	