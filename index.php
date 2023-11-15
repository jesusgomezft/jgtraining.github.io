<!-- header.php -->


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="style.css" as="style">
    <link href="./index.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/69966.png">
    <title>Tu Entrenamiento Online</title>
</head>

<body>


  <!-- encabezado -->
<?php include 'header.php'; ?>


    <!-- BANNER -->


    <section id="banner">
        <h1>Entrenamiento Personalizado <br>a distacia</h1>
        <a href="#parte-inferior">
        <button>Iniciar</button>
        </a>
    </section>


    <!-- 1 seccion -->


    <div id="jesus-slider">

        <ul class="slider">
            <li id="slide1">
                <h1>Que Trabajaremos?</h1>
                <img src="./img/slider1.jpg" />
            </li>
            <li id="slide2">
                <img src="./img/slider2.jpg" />
            </li>
            <li id="slide3">
                <img src="img/slider3.jpg" alt="imagen3">
            </li>
        </ul>

        <ul class="menu">
            <li>
                <a href="#slide1">1</a>
            </li>
            <li>
                <a href="#slide2">2</a>
            </li>
            <li>
                <a href="#slide3">3</a>
            </li>
        </ul>

    </div>


    <!-- 2 seccion  -->

    <section id="encualquierlugar">
        <div class="contenedor">
            <h2>Entrena en Cualquier lugar</h2>
            <div class="cualquierlugar">

                <div class="carta">
                    <h3>EN CASA</h3>
                    <p>Desde la comodidad de tu Hogar</p>
                    <a href="Entrenamientos.php">
                        <button>+ Info</button></a>
                </div>
                <div class="carta">
                    <h3>AL AIRE LIBRE</h3>
                    <p>En algun Parque</p>
                    <a href="Entrenamientos.php">
                        <button>+ Info</button></a>
                </div>
                <div class="carta">
                    <h3>EN EL GYM</h3>
                    <p>En tu Centro de Entrenamiento</p>
                   <a href="Entrenamientos.php">
                    <button>+ Info</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 seccion  -->

    <section id="testimonios">
        <div class="contenedor">
            <h2>Testimonios de Clientes</h2>
            <div class="testimonios-container">
                <div class="testimonio">
                    <div class="foto-cliente">
                        <img src="img/pexels-vazhnik-7562313.jpg" alt="Cliente 1">
                    </div>
                    <div class="texto-testimonio">
                        <p>“Desde que empecé a entrenar con JG Training, he visto una gran evolución en mi forma física.
                            Me encanta la flexibilidad que me brinda el
                            entrenamiento en línea, ya que puedo hacer ejercicio en casa o al aire libre en mi propio
                            horario. Las clases son muy interactivas y personalizadas,
                            y los entrenadores son muy amables y serviciales. ¡Gracias JG Training por ayudarme a
                            alcanzar mis objetivos de fitness!”.
                            <br><em>Alfredo Gomez</em>
                        </p>
                    </div>
             
                
                    <div class="foto-cliente">
                        <img src="img/pexels-anastasia-shuraeva-5704849.jpg" alt="Cliente 2">
                    </div>
                    <div class="texto-testimonio">
                        <p>“Gracias a JG Training he mejorado muchisimo en mi disciplina deportiva, me han ayudado con
                            ejercicios que involucran
                            gesto deportivo y siento que ahora puedo rendir mas a la hora de ir a entrenar al tenis”.
                            <br><em>Jessica Martin</em>
                        </p>
                    </div>
        
               
                    <div class="foto-cliente">
                        <img src="img/pexels-sinitta-leunen-6652928.jpg" alt="Cliente 3">
                    </div>
                    <div class="texto-testimonio">
                        <p>“Hasta hace un par de meses atras pense que entrenar no era lo mio, pero desde que empece a
                            entrenar con JG Training
                            me di cuenta d ela importancia que es aplicar el ejercicio como parte de tu vida cotidiana,
                            Gracias JG por la paciencia
                            y por la motivacion que siempre nos brindas”.
                            <br><em>Carlos Aguilar</em>
                        </p>
                    </div>
                   </div>

            </div>
        </div>
    </section>

    <!-- 4 seccion  -->

    <section id="registrateya">
        
        <h2>Listo para Empezar a entrenar?</h2>
        <a href="Registrate.php">
       
        <button>REGISTRATE YA!</button>
        </a>
        <a id="parte-inferior"></a>

        
    </section>


    <!-- pie de pagina -->

    <footer>
        <div class="contenedor">
            <p>&copy;JGTraining</p>
        </div>
    </footer>


    


    <script src="contacto.js"></script>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
</style>

</html>