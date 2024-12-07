<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./views/inc/head.php" ?>
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>views/Styles/MenuAdmin.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>views/Styles/fontawesome-all.min.css">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo SERVERURL; ?>views/Styles/NavbarAdmin.css">
</head>

<body>
    <div id="wrapper">
        <!-- Navbar -->
        <?php
        require_once "./views/Components/Admin/NavBar.php";
        ?>
        <!-- Main Content-->
        <div id="main">
            <div class="inner text-black">

                <h1>Titulos</h1>

                <p class="text-black"> aqui va el contenido de la paguina para listar productos jsjsjs xd
                </p>
            </div>


        </div>
        <!-- Sidebar -->
        <?php
        require_once "./views/Components/Admin/MenuAdmin.php";
        ?>
        <!--SCRIPTS -->
        <?php require_once "./views/inc/scriptsAdminMenu.php" ?>
    </div>
</body>

</html>