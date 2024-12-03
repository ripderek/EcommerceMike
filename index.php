<?php
require_once "config/app.php";
require_once "./autoload.php";
require_once "./views/inc/session_start.php";

if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ['tienda'];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "./views/inc/head.php" ?>

</head>

<body>

    <?php

    use controllers\viewsControler;

    $viewsControler = new viewsControler();

    //hacer una condicional para saber si el segundo  elemento del array esta vacio porque es la subcarpeta de la vista
    if (isset($url[1])) {
        $vista = $viewsControler->obtenerVistasControlador($url[0], $url[1]);
    } else {
        $vista = $viewsControler->obtenerVistasControlador($url[0]);
    }

    if ($vista == "tienda" || $vista == "404") {
        require_once "./views/content/" . $vista . "-view.php";
    } else {
        require_once $vista;
    }
    require_once "./views/inc/script.php";
    ?>
</body>

</html>