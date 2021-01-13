<?php

include_once "../config.php";

$done = ($_SESSION["first_start"] = true);

header("Location: /"); // Redirect back
