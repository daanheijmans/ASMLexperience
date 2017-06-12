<?php 
// Kijken of gebruiker is ingelogd

session_start();
if( ($_SESSION['user_id'])){
	
}

else {
	header("Location: nologin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mijn projecten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../style/projecten.css">
</head>
<body>
    <div class="wrapper">
        <div class="vertical-menu">
            <?php include_once "../menu_balk/menu.php"?>
        </div></br>
            <div class="flex-container">
				<div class="flex-item"><div id="top"><img class="projects" src="../images/chip.png"></div></div>
				<div class="flex-item"><div id="top"><img class="projects" src="../images/chip.png"></div></div>
				<div class="flex-item"><div id="top"><img class="projects" src="../images/binear.png"></div></div>
                <div class="flex-item"><div id="top"><img class="projects" src="../images/networking.png"></div></div>
				<div class="flex-item"><div id="top"><img class="projects" src="../images/networking.png"></div></div>
            </div>
			
			<div class="text">
				<h2>Code your chipmachine</h2>
				<hr>
				<p>Bouw en codeer je eigen chipmachine. Door middel van deze challange kom je er achter hoe ASML omgaat met code en programmeren.</p>
			
				<div class="tags">
				<h3>Tags</h3>
				<p>Software, Chip, Groepswerk</p>
				</div>
			</div>	
			
			<div class="textrechts">
				<div class="rating">
				<h3>Beoordeling</h3><img src="../images/ster.png">
				</div>
				<div class="feedback"><h3>Feedback</h3>
				<p>Erg mooi om te zien dat het al functioneel is, denk er echter wel aan om je code schoon en clean te houden! <a href="#">Meer lezen</a></p>
				</div>
				
				<div class="socialmedia">
				<h3>Delen via socialmedia</h3>
				<img src="../images/snapchat.png">
				<img src="../images/instagram.png">
				<img src="../images/facebook.png">
				<img src="../images/linkedin.png">
				</div>
			</div>	
			
            <div class="flex-container2">
				<div class="flex-item2"><div id="top"><img class="projects" src="../images/chip.png"></div></div>
				<div class="flex-item2"><div id="top"><img class="projects" src="../images/chip.png"></div></div>
				<div class="flex-item2"><div id="top"><img class="projects" src="../images/binear.png"></div></div>
            </div>
    </div>
			
</body>
</html>