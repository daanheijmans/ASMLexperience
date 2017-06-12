<?php session_start();


if( ($_SESSION['user_id'])){
}

else {
	header("Location: nologin.php");
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<body>
	U bent ingelogd. Klik <a href="logout.php">hier</a> om uit te loggen.
	</body>
</html>