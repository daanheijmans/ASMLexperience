<?php 
session_start();
if( (isset($_SESSION['user_id']) ) ){
	header("Location: home.php");
}

else {
	header('Refresh: 1.5; URL=login.php');
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>U bent niet ingelogd, u wordt doorverwezen naar de inlogpagina!</h1>	
	</body>
</html>