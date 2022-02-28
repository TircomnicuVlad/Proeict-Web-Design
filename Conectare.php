<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Conectare</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="CSS4.css">
		<script type="text/javascript">

			function anulare(){;
				document.getElementById("username").value="";
				document.getElementById("password").value="";
				document.getElementById("form").style.backgroundColor = "#314";
			}

		</script>
	</head>

<body>
	<h1>Audio Center</h1>
	<div class="dropdown">
		  <button class="dropbtn">Dropdown</button>
		  <div class="dropdown-content">
		    <a href='Meniu.php'>Meniu</a>
		    <a href='Produse.php'>Produse</a>
		    <a href="Inregistrare.php">Înregistrare</a>
		    <a href="Conectare.php">Conectare</a>
		  </div>
	</div>

	<form id="form" method="post" action="Conectare.php" style="padding-top: 50px" >

		<?php include('errors.php'); ?>

		<label for="username" style="color:white; font-size:20px; font-family:Arial">Nume utilizator</label><br>

		<input  type="text" id="username" name="username" value="<?php echo $username; ?>"><br><br>

		<label for="password" style="color:white; font-size:20px; font-family:Arial">Parolă</label><br>

		<input type="password" id="password" name="password"><br><br>
		<hr>
		<button type="submit" name="login" id="login">Conectare</button>
		<button type="button" style="margin-left:50px" onclick="anulare()">Anulare</button><br><br>

		<a href="Inregistrare.php" style="color:white; font-size:20px; font-family:Arial"> Nu ai un cont? Apasă aici.</a>
		
	</form>
	<h1 style= "margin-top:12%">-Audio Center-</h1>
<body>
</html>	