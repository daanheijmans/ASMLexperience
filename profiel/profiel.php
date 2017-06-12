<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mijn Profiel</title>
    <link rel="stylesheet" href="../style/profiel.css">
</head>
<body>
<div class="wrapper">
    <div class="vertical-menu">
        <?php include_once "../menu_balk/menu.php" ?>
    </div>
    <div id="links">
        <div id="gegevens">
            <div id="naam">
                <p>Naam<br>
                    <input type="text" name="naam"></p>
            </div>
            <div id="leeftijd">
                <p>Leeftijd<br>
                    <input type="text" name="leeftijd"></p>
            </div>
            <div id="email">
                <p>E-mail<br>
                    <input type="text" name="email"></p>
            </div>
            <div id="opleiding">
                <p>Opleiding<br>
                    <input type="text" name="opleiding"></p>
            </div>
            <div id="website">
                <p>Website<br>
                    <input type="text" name="website"></p>
            </div>
            <div id="linkedin">
                <p>LinkedIN<br>
                    <input type="text" name="linkedin"></p>
            </div>
            <div id="facebook">
                <p>Facebook<br>
                    <input type="text" name="facebook"></p>
            </div>
            <div id="wachtwoord">
                <p>Wachtwoord<br>
                    <input type="password" name="wachtwoord"></p>
            </div>
        </div>
    </div>
    <div id="rechts">
        <div id="profielfoto">
            <img src="../images/profile.png">
        </div>
        <div id="meldingen">
            <div id="titel">
                Instellingen voor meldingen
            </div>
            <div id="nieuwe_berichten">
                Meldingen voor nieuwe berichten
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>
            <div id="nieuwe_beoordelingen">
                Meldingen voor nieuwe beoordelingen
                <div class="onoffswitch2">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                    <label class="onoffswitch-label" for="myonoffswitch2">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>