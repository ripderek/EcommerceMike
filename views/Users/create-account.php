<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/Styles/Global.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/Styles/Tailwind.min.css">
</head>
<body class="bg-p-blue-900">
    <div class="bg-p-blue-900">
        <div class="p-4 mb-2  lg:w-64 w-52"> 
        <img src="<?php echo SERVERURL; ?>Public/Images/Extintor_logo7.png" alt="logo_app" >
        </div>
        <div class="grid gap-3 grid-cols-1 md:grid-cols-2">
            <div class="hidden lg:block mx-auto"> <div class=" items-center p-12 mt-6 justify-center text-4xl gap-3 text-white"><h1>¡Hola!
                </h1>
           <div class="mt-8 w-96 "> <h1 class="leading-snug ">¡Qué gusto verte!</h1></div>
            </div></div>
                <div class="p-5 lg:mx-36 mx-0 lg:bg-blue-990 bg-transparent">
                    <div class="text-white">
                        <h1>Crea tu cuenta</h1>
                    <p>¿Ya tienes una cuenta? <a class="text-p-yellow-700 hover:text-white" href="/Users/login.html">Inicia sesión</a></p>
                    <form action="" class="flex flex-col gap-4 mt-4">
                        <input type="text" name="correo" placeholder="Correo" class="bg-p-blue-1000 p-4 text-white input-p" >
                        <input type="password" name="contrasenia" placeholder="Contraseña"  class="bg-p-blue-1000 p-4 text-white input-p" >
                        <input type="password" name="contrasenia" placeholder="Repetir contraseña"  class="bg-p-blue-1000 p-4 text-white input-p" >
                        <button class="bg-p-yellow-600 text-xl font-bold p-2 text-blue-900">Crea tu cuenta</button>
                    </form>
                </div>
               </div>
        </div>
    </div>
   <!--FOOTER-->
   <footer class="bg-p-yellow-600 fixed bottom-0 w-full">
  <div class="grid gap-3 p-5 grid-cols-1 md:grid-cols-2">
      <div class="text-center">© 2025 Extintor Team</div>
      <div class="grid gap-3  grid-cols-3 text-center">
        <a href="#" class="hover:text-black font-bold text-p-blue-1000">Acerca de </a>
        <a href="#" class="hover:text-black font-bold text-p-blue-1000">Licencia</a>
        <a href="#" class="hover:text-black font-bold text-p-blue-1000">Contacto</a>
      </div>
  </div>
  </footer>
</body>
</html>