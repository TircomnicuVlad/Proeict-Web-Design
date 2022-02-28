<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inregistrare</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="CSS3.css">
		<script type="text/javascript">

			function anulare(){
				document.getElementById("email").value="";
				document.getElementById("username").value="";
				document.getElementById("password_1").value="";
				document.getElementById("password_2").value="";
				document.getElementById("form").style.backgroundColor = "#314";
			}
		</script>

	</head>

<body>
	<h1>Inregistrare</h1>
	<div class="dropdown">
		  <button class="dropbtn">Dropdown</button>
		  <div class="dropdown-content">
		    <a href='index.php'>Meniu</a>
		    <a href='Produse.php'>Produse</a>
		    <a href="Inregistrare.php">Înregistrare</a>
		    <a href="Conectare.php">Conectare</a>
		  </div>
	</div>

	
	<form id="form" method="post" action="Inregistrare.php" style="padding-top: 30px;">

		<?php include('errors.php'); ?>

		<label style="color:white; font-size:30px; font-family:Arial">Creare cont nou</label><br><br><br>

		<label for="email" style="color:white; font-size:20px; font-family:Arial">Email</label><br>

		<input type="text" id="email" name="email" value="<?php echo $email; ?>"><br><br>

		<label for="username" style="color:white; font-size:20px; font-family:Arial">Nume utilizator</label><br>

		<input type="text" id="username" name="username" value="<?php echo $username; ?>"><br><br>

		<label for="password_1" style="color:white; font-size:20px; font-family:Arial">Parolă</label><br>

		<input type="password" id="password_1" name="password_1"><br><br>

		<label for="password_2" style="color:white; font-size:20px; font-family:Arial">Confirmare parolă</label><br>

		<input type="password" id="password_2" name="password_2"><br><br>
		<hr>
		<button type="submit" name="register" id="register">Înregistrare</button>
		<button type="button" style="margin-left:50px" onclick="anulare()">Anulare</button><br><br>

		<a href="Conectare.php" style="color:white; font-size:20px; font-family:Arial"> Ai deja cont? Apasă aici.</a> 
	</form>
			<h1 style= "margin-top:5%;">-Audio Center-</h1>
<body>
</html>	