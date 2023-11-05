<?php

session_start();
$error_message = '';
	if($_POST){
	include('database/connection.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = 'SELECT * FROM users WHERE users.email="'. $username .'" AND users.password="'. $password .'" LIMIT 1';
	$stmt = $conn -> prepare($query);
	$stmt->execute();
	
	
	if($stmt->rowCount() > 0){
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$user = $stmt->fetchAll()[0];
		$_SESSION['user'] = $user;
		header('Location:dashboard.php');
	}else  $error_message = 'Enter Valid Usename and Password';
}?>

<!DOCTYPE html>
<html>
<head>
	<title>Pratiksha Jadkar - Publishing Company</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginBody">

	<div class="container">
		<div class="loginHeader">
			<h1>Pratiksha Jadkar</h1>
			<p>Publishing Company</p>
		</div>
		
		<div class="loginBody">
		<?php if(!empty($error_message)){  ?>			
			<div id="errorMessage">
				<B>ERROR:</B> <p><?= $error_message ?></p>
			</div>
         <?php } ?>		

			<form action="login.php" method = "POST">
				<div class="loginInputsContainer">
					<label for="">Username</label>
					<input placeholder="username" name="username" type="text" />
				</div>
				<div class="loginInputsContainer">
					<label for="">Password</label>
					<input placeholder="password" name="password" type="password" />
				</div>
				<div class="loginButtonContainer">
					<button>login</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>