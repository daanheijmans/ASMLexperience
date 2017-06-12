<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mijn Profiel</title>
    <link rel="stylesheet" href="../style/berichten.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(
            function() {
                $("#onderwerp").click(function() {
                    $("#bericht_tekst").toggle();
                });
            });
    </script>
    <script>
        $(document).ready(
            function() {
                $("#onderwerp1").click(function() {
                    $("#bericht_tekst1").toggle();
                });
            });
    </script>

</head>
<body>
<div id="wrapper">
    <div id="menu">
        <?php include_once "../menu_balk/menu.php" ?>
    </div>
    <div id="nieuw_bericht">
        <a href="nieuw_bericht.html" onclick="window.open('nieuw_bericht.php','Nieuw_bericht', 'width=1200vw,height=800vh,scrollbars=no,toolbar=no,location=no'); return false">
            <img src="../images/add.png">Nieuw bericht
        </a>
    </div>
    <div id="berichten">
        <div id="heading">
            <div id="zender">
                test@asmlplatform.com
            </div>
            <div id="onderwerp">
                <a class="onderwerp" href="#">Test bericht</a>
            </div>
            <div id="datum">
                Woensdag 31 mei 2017
            </div>
            <div id="reageer">
                <img src="../images/antwoorden.png">
            </div>
            <div id="doorsturen">
                <img src="../images/doorsturen.png">
            </div>
            <div id="verwijderen">
                <img src="../images/verwijderen.png">
            </div>
        </div>
        <div id="bericht_tekst">
            <h2>Beste Test User</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a tellus sed odio elementum molestie aliquet a ligula. In hac habitasse platea
                dictumst. Donec porttitor at nulla vitae rhoncus. Ut fringilla auctor nisi, eu egestas justo tincidunt ac. Donec vulputate sapien ac massa
                tincidunt, at efficitur ante luctus. Praesent vehicula, sapien vitae efficitur semper, velit lorem sollicitudin nisi, ac malesuada orci nibh
                at nisi. Maecenas quam orci, commodo sed tortor vitae, varius posuere nisl. Nulla laoreet eu risus sed pellentesque. Curabitur urna ex, tempor
                quis ante id, condimentum posuere eros. Sed porttitor erat nisl, tempus aliquam est bibendum ut. Phasellus ultrices feugiat nisi vel ornare.
                Suspendisse potenti.
            </p>
        </div>

        <div id="heading">
            <div id="zender">
                test@asmlplatform.com
            </div>
            <div id="onderwerp1">
                <a class="onderwerp" href="#">Onderwerp</a>
            </div>
            <div id="datum">
                Woensdag 31 mei 2017
            </div>
            <div id="reageer">
                <img src="../images/antwoorden.png">
            </div>
            <div id="doorsturen">
                <img src="../images/doorsturen.png">
            </div>
            <div id="verwijderen">
                <img src="../images/verwijderen.png">
            </div>
        </div>
        <div id="bericht_tekst1">
            <p>dit is een test dit is een test dit is een test dit is een test dit is een test dit is een test dit is een test dit is een test dit is een test dit is een test </p>
        </div>
    </div>
</div>
</body>
</html>