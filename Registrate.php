<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrate.css">

	
    <title>Registrate</title>
</head>

<?php include 'header.php'; ?>

<body>




                <!-- nav -->
				<!-- <header>
					<div class="contenedor">
						<p class="logo">
							<img src="./img/69966.png" alt="Icono" /><b>JG Training</b>
						</p>
						<nav>
							<a href="index.html">Inicio</a>
							<a href="Entrenamientos.html">Entrenamientos</a>
							<a href="contacto.html">Contacto</a>
							<a href="Registrate.html">Registrate</a>
						</nav>
					  
						<div class="menu-icon" id="menu-icon">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
						</div>
					</div>
				</header> -->




    <!-- formulario -->
 <body>
<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Crear una cuenta</h1>
			<div class="social-container">
				<a href="#" class="social"><img src="./img/facebook-logo-24.png" alt="Facebook"></a>
				<a href="#" class="social"><img src="./img/google-plus-circle-logo-24.png" alt="Google Plus"></a>
				<a href="#" class="social"><img src="./img/linkedin-logo-24.png" alt="LinkedIn"></a>
			</div>
			<span>o utiliza tu correo electrónico para registrarte</span>
			<input type="text" placeholder="Nombre" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Inscribirse</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Iniciar sesión</h1>
			<div class="social-container">
				<a href="#" class="social"><img src="./img/facebook-logo-24.png" alt="Facebook"></a>
				<a href="#" class="social"><img src="./img/google-plus-circle-logo-24.png" alt="Google Plus"></a>
				<a href="#" class="social"><img src="./img/linkedin-logo-24.png" alt="LinkedIn"></a>
			
			</div>
			<span>o usa tu cuenta</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">¿Olvidaste tu contraseña?</a>
			<button>Iniciar sesión</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenido de nuevo</h1>
				<p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
				<button class="ghost" id="signIn">Iniciar sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>
                    Introduce tus datos personales y comienza tu viaje con nosotros.</p>
				<button class="ghost" id="signUp">Inscribirse</button>
			</div>
		</div>
	</div>
</div>


<footer>
	<div class="contenedor">
		<p>&copy;JGTraining</p>
	</div>
</footer>





<!-- partial -->
  <script  src="./registrate.js"></script>

</body>

</html>