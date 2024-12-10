<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>views/Components/Admin/MenuAdmin/MenuAdmin.css">
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>views/Components/Admin/MenuAdmin/fontawesome-all.min.css">
</head>

<body>
	<!-- Sidebar -->
	<div id="sidebar" class="bg-p-blue-1000 z-50">
		<div class="inner">
			<!-- Menu -->
			<nav id="menu">
				<header class="major mb-2">
					<h2>Productos</h2>
				</header>
				<ul>
					<li><a href="index.html">Listar Productos</a></li>
					<li>
						<span class="opener">Gestionar</span>
						<ul>
							<li><a href="#">Ofertas</a></li>
							<li><a href="#">Categorias</a></li>
							<li><a href="#">Tipos productos</a></li>
						</ul>
					</li>
					<li>
						<span class="opener">Another Submenu</span>
						<ul>
							<li><a href="#">Lorem Dolor</a></li>
							<li><a href="#">Ipsum Adipiscing</a></li>
							<li><a href="#">Tempus Magna</a></li>
							<li><a href="#">Feugiat Veroeros</a></li>
						</ul>
					</li>
				</ul>
			</nav>


			<div>
				<div class="lg:w-52 w-36 lg:h-10 h-6 mx-auto">
					<img src="<?php echo SERVERURL; ?>Public/Images/Extintor_logo7.png" alt="logo_app">
				</div>
			</div>
			<!-- Footer -->
			<footer id="footer">
				<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
			</footer>

		</div>
	</div>
	<script src="<?php echo SERVERURL; ?>views/Components/Admin/MenuAdmin/Js/breakpoints.min.js"></script>
	<script src="<?php echo SERVERURL; ?>views/Components/Admin/MenuAdmin/Js/browser.min.js"></script>
	<script src="<?php echo SERVERURL; ?>views/Components/Admin/MenuAdmin/Js/jquery.min.js"></script>
	<script src="<?php echo SERVERURL; ?>views/Components/Admin/MenuAdmin/Js/main.js"></script>
	<script src="<?php echo SERVERURL; ?>views/Components/Admin/MenuAdmin/Js/util.js"></script>
</body>

</html>