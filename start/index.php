<?php
include_once "../assets/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Getting Started</title>
    <?php require_once "../assets/components/stylesheets.php"; ?>
</head>
<body class="start">
    <article class="start-menu-container">
        <h2>Výtam ťa!</h2>
        <form action="../assets/actions/save_settings.php" method="POST">


        <?php

            if (needSetup()){
              initiateSettings();
            }
            else{
                echo "Niesú k dispozícií žiadne prvotné nastavenia";
            }

        ?>

            <button id="firstStartSaveButton" class="button">Hotovo</button>
        </form>

    </article>

    <?php require_once "../assets/components/scripts.php"; ?>
</body>
</html>
