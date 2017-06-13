<?php

session_start();

// Als gebruiker al is ingelogd, wordt die geredirect naar het dashboard

if( isset($_SESSION['user_id']) ){
	header("Location: ../dashboard/dashboard.php");
	exit;
}

require 'pdoconnect.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

	$_SESSION['user_id'] = $results['id'];
	$_SESSION['email'] = $_POST['email'];
	header("Location: ../dashboard/dashboard.php");
	exit;


	} else {
		$message = 'Gebruikersnaam of wachtwoord fout!';
	}

endif;

?>

<!DOCTYPE html>
<head>
<title>ASML Experience</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="https://use.fontawesome.com/2e47b26df5.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../style/login.css">
</head>
<body>
	<div class="wrapper">
	<form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>" class="login">
	<p class="title">Log in</p>
		<input type="email" id="email" placeholder="Voer hier uw email in" name="email" required>
		<i class="fa fa-envelope"></i>
		<input type="password" id="password" placeholder="en wachtwoord" name="password" required>
		<i class="fa fa-key"></i>
		
		<input type="submit" value="Inloggen" id="submit">
		
		<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
		<?php endif; ?>	
		
		<a href="register.php">Of regristreer</a>
		
	</form>
	</div>
	
	<script src="../js/index.js"></script>

</body>
</html>
