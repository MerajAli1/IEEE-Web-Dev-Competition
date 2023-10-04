<?php
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	include 'includes/session.php';

	if(isset($_POST['signup'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];


		
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email already taken';
				header('location: signup.php');
			}
			else{
				$now = date('Y-m-d');
				$password = password_hash($password, PASSWORD_DEFAULT);
				$stmt = $conn->prepare("INSERT INTO users (email, password, firstname, lastname,  created_on) VALUES (:email, :password, :firstname, :lastname, :now)");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname,  'now'=>$now]);
				$_SESSION['success'] = 'Account created.';
				header('location: login.php');

			}

		

	}
	else{
		$_SESSION['error'] = 'Fill up signup form first';
		echo $_SESSION['error'];
		//header('location: login.php');
	}

?>