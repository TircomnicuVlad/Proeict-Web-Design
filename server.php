<?php
	session_start();
	$username="";
	$email="";
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '','utilizatori');

	if (isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];

		if(empty($username)){
			array_push($errors, "Numele de utilizator trebuie introdus");

		}
		if(empty($email)){
			array_push($errors, "Email-ul trebuie introdus");
			
		}
		if(empty($password_1)){
			array_push($errors, "Parola trebuie introdusă");
			
		}
		if(empty($password_2)){
			array_push($errors, "Parola trebuie confirmată");
			
		}

		if ($password_1 != $password_2){
			array_push($errors, "Cele două parole diferă");
		}

		if (count($errors) == 0){
			$password = md5($password_1);
			$sql = "INSERT INTO users (username, email, password)
						VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Acum ești conectat";
			header('location: Meniu.php');
		}
	}

	if (isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username)){
			array_push($errors, "Numele de utilizator trebuie introdus");

		}
		if(empty($password)){
			array_push($errors, "Parola trebuie introdusă");
		}

		if(count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Acum ești conectat";
				header('location: Meniu.php');
			}else{
				 array_push($errors, "Nume/Parolă greșite ");
			}
		}
	}

	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: Conectare.php');
	}

?>