<?php
require_once "config/app.php";
require_once "./autoload.php";
require_once "./views/inc/session_start.php";


include "views/Users/login.php";

if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ['login'];
}
