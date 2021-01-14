<?php
include_once "../assets/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Getting Started</title>
    <?php require_once "../assets/components/stylesheets.php";
        $url = $_GET["path"];
    ?>
</head>
<body class="player">
<video id="video">
    <source src="<?= $url ?>" type="video/mp4">
</video>
<div id="video-controls" class="controls" data-state="hidden">
    <div id="bottom-controls">
        <div class="control" id="play">play</div>
        <progress class="control" id='progress-bar' min='0' max='100' value='0'>0% played</progress>
        <div class="control" id="fullscreen">fullscreen</div>
    </div>
    <div id="top-controls">
        <h2><?= getFileNameFromPath($url) ?></h2>
    </div>
</div>

<?php require_once "../assets/components/scripts.php"; ?>
</body>
</html>


