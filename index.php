<?php

include_once "assets/config.php";

/*
    Deciding what we will do
*/

areYouNew() ? firstTimeSetup() : startApplication();
