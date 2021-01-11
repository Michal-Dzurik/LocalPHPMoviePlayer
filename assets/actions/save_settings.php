<?php

include_once "../config.php";

$done = ($_SESSION["first_start"] = true);

if(isRequestAJAX()) {
    echo ($done ? "success" : "error");
}
else echo ($done ? "Podarilo sa" : "Nepodarilo sa") . "<a href='/'>Vrátiť sa</a>" ;
