<?php
 $settings_needed = null;

/*
    SETTINGS VARIABLE EXAMPLE

$settings_needed = [
    [
        "name" => "something" ,
        "input" => "color"
    ]
];
*/

/* NO DB HERE */

session_start();

// FUNCTION

function firstTimeSetup(){
    header("Location: ../start/");
}

function areYouNew(){
    return !$_SESSION["first_start"];
}

function startApplication(){
    header("Location: ../library/");
}

function needSetup(){
    global $settings_needed;
    return $settings_needed == null ? false : true ;
}

function initiateSettings(){
    global $settings_needed;

    $string = "";
    for ($i = 0;$i < count($settings_needed); $i++){
        $settings_name = $settings_needed[$i]["name"];
        $settings_name = $settings_needed[$i]["input"];

        $string .= "<label for='$settings_name'>s
                <input type='$settings_name' name='$settings_name' id='$settings_name'>
            </label>";
    }


    echo $string;
}

function isRequestAJAX(){
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}