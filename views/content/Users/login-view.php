<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./views/inc/head.php" ?>
</head>

<body class="bg-p-blue-900">
    <div class="bg-p-blue-900">
        <div class="p-4 mb-2  lg:w-64 w-52">
            <img src="<?php echo SERVERURL; ?>Public/Images/Extintor_logo7.png" alt="logo_app">
        </div>
        <div class="grid gap-3 grid-cols-1 md:grid-cols-2">
            <div class="hidden lg:block mx-auto">
                <div class=" items-center p-12 mt-6 justify-center text-4xl gap-3 text-white">
                    <h1>¡Hola!
                    </h1>
                    <div class="mt-8 w-96 ">
                        <h1 class="leading-snug ">¡Qué gusto verte!</h1>
                    </div>
                </div>
            </div>
            <div class="p-5 lg:mx-36 mx-0 lg:bg-blue-990 bg-transparent">
                <div class="text-white">
                    <h1>Iniciar Sesión</h1>
                    <p>¿Nuevo Usuario? <a class="text-p-yellow-700 hover:text-white" href="<?php echo SERVERURL; ?>Vistas/Users/create-account.php">Crear Cuenta</a></p>
                    <form action="" class="flex flex-col gap-4 mt-4">
                        <input type="text" name="correo" placeholder="Correo" class="bg-p-blue-1000 p-4 text-white input-p">
                        <input type="password" name="contrasenia" placeholder="Contraseña" class="bg-p-blue-1000 p-4 text-white input-p">
                        <button class="bg-p-yellow-600 text-xl font-bold p-2 text-blue-900 ">Iniciar Sesión</button>
                        <a class="text-p-yellow-700 text-center hover:text-white" href="/Users/recuperar-contra.html">¿Has olvidado tu contraseña?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--FOOTER-->
    <?php
    require_once "./views/Components/Others/Footer.php";
    ?>
</body>

</html>