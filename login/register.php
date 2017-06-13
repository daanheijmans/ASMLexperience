<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: index.php");
}

require 'pdoconnect.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);

	$hashedPass = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', $hashedPass );

	if( $stmt->execute() ):
		$message = 'Succesvol geregistreerd, u kunt nu inloggen!';
		header('Refresh: 1.5; URL=login.php');
	else:
		$message = 'Sorry, er is iets misgegaan bij het maken van uw account.';
	endif;

endif;

?>

<!DOCTYPE html>
<head>
<title>ASML Experience</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
	<script src="https://use.fontawesome.com/2e47b26df5.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/login.css">
</head>
<body>
	<div class="wrapper">
	<form action="register.php" method="POST" class="login">
		<p class="title">Register</p>
		<input type="email" id="email" placeholder="Voer hier uw email in" name="email" required>
		<i class="fa fa-envelope"></i>
		<input type="password" id="password" placeholder="en wachtwoord" name="password" required>
		<i class="fa fa-key"></i>
		
		<input type="submit" value="Registreren" id="submit">
		
		<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
		<?php endif; ?>
		
	<a href="login.php">Of log in</a>	
	
	</form>
	</div>
</body>
</html>
