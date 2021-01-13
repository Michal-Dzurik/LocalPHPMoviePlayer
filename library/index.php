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
<body class="library">
<main>
    <h2>Filmy, ktoré sa našli:</h2>
    <article id="movies-container">
        <ul>
            <?php

            $directories = glob( '../movies-example/*' , GLOB_ONLYDIR);
            $movies_mp4 = glob( '../movies-example/*.mp4' );
            $movies_avi = glob( '../movies-example/*.avi');
            $movies_mkv = glob( '../movies-example/*.mkv');
            $movies_webm = glob( '../movies-example/*.webm');

            for ($i = 0; $i < count($movies_mp4); $i++):?>
            <li>
                <article class="movies background-grey">
                    <h4><?= getFileNameFromPath($movies_mp4[$i]) ?></h4>
                    <a href="<?= getHref("../player/index.php","path",$movies_mp4[$i]) ?>" class="play-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="#ffffff" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-3 17v-10l9 5.146-9 4.854z"/></svg>
                    </a>
                </article>
            </li>
            <?php endfor;?>
        </ul>
    </article>
</main>

<?php require_once "../assets/components/scripts.php"; ?>
</body>
</html>

