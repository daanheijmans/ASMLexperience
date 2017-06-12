<?php 

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
    <title>Projecten van de community</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../style/community.css">
</head>
<body>
    <div class="wrapper">
        <div class="vertical-menu">
            <?php include_once "../menu_balk/menu.php"?>
        </div></br>
        <h1>Projecten van de community</h1>
            <div class="flex-container">
              <div class="flex-item"><div id="top"><div class="thumbnail"><img class="projects" src="https://ic.tweakimg.net/ext/i/imagelarge/2001101831.jpeg"></div></div>
                  <div id="bottom"></br>
                      <div class="titel">Programmeer je eigen robot</div></br>
                      
                  </div>
              </div>
              <div class="flex-item"><div id="top"><img class="projects" src="../images/chip.png"></div>
                  <div id="bottom"></br>
                      <div class="titel">Embedded systems</div></br>
                      
                  </div>
              </div>
              <div class="flex-item"><div id="top"><img class="projects" src="../images/binear.png"></div>
                  <div id="bottom"></br>
                      <div class="titel">Booleaanse algebra</div></br>
                      
                  </div>
              </div>
                <div class="flex-item"><div id="top"><img class="projects" src="../images/networking.png"></div>
                    <div id="bottom"></br>
                        <div class="titel">Windows Server 2012 netwerk</div></br>
                    
					</div>
            </div>
            </div>

            <div class="flex-container2">
              <div class="flex-item2"><div id="top"><img class="projects" src="../images/robot.jpg"></div>
                  <div id="bottom"></br>
                      <div class="titel">Programmeer je eigen robot</div></br>
                      
                  </div>
              </div>
              <div class="flex-item2"><div id="top"><img class="projects" src="../images/chip.jpg"></div>
                  <div id="bottom"></br>
                      <div class="titel">Embedded systems</div></br>
                      
                  </div>
              </div>
              <div class="flex-item2"><div id="top"><img class="projects" src="../images/binear.jpg"></div>
                  <div id="bottom"></br>
                      <div class="titel">Booleaanse algebra</div></br>
                      
                  </div>
              </div>
              <div class="flex-item2"><div id="top"><img class="projects" src="../images/binear.jpg"></div>
                  <div id="bottom"></br>
                      <div class="titel">Booleaanse algebra</div></br>
                      
                  </div>
              </div>			  
            </div>
    </div>
</body>
</html>