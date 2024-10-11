<?php
    require_once 'php/guardian.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender sobre el arte</title>
    <link rel="stylesheet" href="css/vistaprofesor.css">
    <link rel="stylesheet" href="css/normalice.css">
</head>
<body>

    <main class="ContenidoPrincipalArte">
        <div class="ContenidoPrincipalArte1">
            <div class="ContenidoPrincipalArte1--hijos">
                <div>
                    <img loading="lazy" src="img/CursosProfeArtes.jpg" alt="CursoSobreArte">
                </div>
                <div class="botonarte">
                    <button class="BotonAgregarTareas"><a href="NOMBRE DEL.html">Agregar Nueva Tarea</a></button>
                    <button class="BotonHoraUbicacion"><a href="participantes.php">Horarios y Ubicacion</a></button>
                    <ul class="ListaTareas">
                        <li><a href="tarea1.html">Tarea 1: Realizar un dibujo</a></li>
                        <li><a href="tarea2.html">Tarea 2: Investigar sobre un artista famoso</a></li>
                        <li><a href="tarea3.html">Tarea 3: Preparar una presentación</a></li>
                        <!-- Agrega más elementos <li> con enlaces <a> según tus tareas -->
                    </ul>
                    
                </div>
            </div>
            <div class="ContenidoPrincipalArte2--hijos">
                <div>
                    <h2>Aprende sobre el arte</h2>
                </div>
                <div>
                    <p>El arte es un conjunto de disciplinas que fueron creadas por los seres humanos en la búsqueda de experiencias estéticas y fines simbólicos.</p>
                </div>
                <div>
                    <h3>Aprendizaje Esperado</h3>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero vitae delectus, labore similique, illum distinctio nihil</p>
                </div>
                <div class="ContenidoPrincipalArte1--hijos--Profesor">
                    <div>
                        <h3 class="ContenidoPrincipalArte1--hijos--Profesor__Titulo">Profesor:</h3>
                    </div>
                    <div>
                        <p class="ContenidoPrincipalArte1--hijos--Profesor__profesor">Juan Diego Trejo Sandoval</p>
                    </div>
                </div>
                <div class="ContenidoPrincipalArte1--hijos--CodigoAcceso">
                    <label for="participantes">lista de asistencia:</label>
                    <div class="revisarparticipantes1">
                        <button class="BotonParticipantes"><a href="">Revisar Participantes</a></button>
                        
                    </div>
                    <p<div class="Informacion">
                    <div class="revisarinformacion1">
                        <button class="BotonInformacion"><a href="#">Editar Informacion</a></button>
                    
                    </div>
                    <div class="codigosdeacceso">

                    </div>
                </div>
            </div>
        </div>
    </main>
   
    <script src="./js/bienvenida.js"></script>

                </div>
            </div>
        </div>
    </footer>
    <script src="js/opciones.js"></script>
</body>
</html>
