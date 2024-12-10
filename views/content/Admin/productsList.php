<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./views/inc/head.php" ?>
</head>

<body>
    <!-- Navbar -->
    <?php
    require_once "./views/Components/Admin/NavBar/NavBar.php";
    ?>
    <div id="wrapper">
        <!-- Main Content-->
        <div id="main" class="text-black  p-6">
            <!--Titulo-->
            <div class="text-4xl md:ml-12 ml-0 mb-5">
                <h2>Productos</h3>
            </div>
            <!--Contenido-->
            <div class="mb-8 flex items-center justify-between gap-8 ">
                <div>
                    <h3 class=" text-2xl text-gray-800">
                        Lista de los productos
                    </h3>
                    <p class="mt-1 ">
                        Mira mas información de los productos
                    </p>
                </div>
                <div class="flex shrink-0 flex-col gap-2 sm:flex-row">
                    <button class="border-2 border-black p-2 rounded-lg">
                        Más info
                    </button>
                    <button class="flex items-center gap-3 p-2 rounded-lg text-white bg-black">
                        Agregar
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <?php
        require_once "./views/Components/Admin/MenuAdmin/MenuAdmin.php";
        ?>
    </div>
</body>

</html>