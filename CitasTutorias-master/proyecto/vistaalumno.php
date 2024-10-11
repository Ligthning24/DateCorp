<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <meta name="description" content="Pagina sobre cursos">
    <!--El preload nos ayuda a que el archivo que le estamos diciendo sea el primero que cargue-->
    <link rel="preload" href="css/vistaalumno.css" as="style">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <!--El preload nos ayuda a que de igual manera que con el css pero ahora con las paginas web, este caso es la primera pagina que uno piensa que es la que va a usar el usuario-->
    <link rel="prefetch" href="arte.php" as="Document">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
</head>
<body>
    <?php include 'vistas/header.php'?>
    <main class="ContenidoPrincipal">
        <div>
            <h2 class="Titulo">Asesorias Disponibles</h2>
        </div>
        <div class="Cursos"> 
            <div>
                <!--La etiqueta lazy nos ayuda a que cuando el usuario llegue a esa imagen es cuando se carga esa imagen-->
                <!--Esto viene bien por la pagina por temas de optimizacion de recursos-->
                <!--Osea que la pagina cargue mas rapido-->
                <img loading="lazy" src="img/Curso1Arte.jpg" alt="Curso 1">
                <div class="cursosflex">
                    <div>
                        <h3>Aprender sobre el arte</h3>
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput" type="button" id="BotonNotificacion"><a href="arte.php">Ver</a></button>
                    </div>
                </div>
               
            </div>
            <div>
                <picture>
                    <img loading="lazy" src="img/Curso2CalculoDiferencial.jpg" alt="Curso 2">
                </picture>
                <div class="cursosflex">
                    <div>
                        <h3>Calculo Diferencial</h3>        
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput" ><a href="#">Ver</a></button>
                    </div>
                </div>
                
            </div>
            <div>
                <picture>
                    <source loading="lazy" srcset="img/Negocios.webp" type="image/webp">
                    <img src="/img/Negocios1.jpg" alt="Curso3">
                </picture>
                <div class="cursosflex">
                    <div>
                        <h3>Teoria sobre negocios</h3>
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput"><a href="#">Ver</a></button>
                    </div>
                </div>
                
            </div>
            <div>
                <img loading="lazy" src="img/Curso8.jpg" alt="Curso 4">
                <div class="cursosflex">
                    <div>
                        <h3>Habilidades Culturales</h3>
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput" ><a href="#">Ver</a></button>
                    </div>
                </div>
            </div>
            <div>
                <img loading="lazy" src="img/Curso5.jpeg" alt="Curso 5">
                <div class="cursosflex">
                    <div>
                        <h3>Historia de Mexico</h3>
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput"><a href="#">Ver</a></button>
                    </div>
                </div>
                
            </div>
            <div>
                <img loading="lazy" src="img/Curso6.jpeg" alt="Curso 6">
                <div class="cursosflex">
                    <div>
                        <h3>Ingles V</h3>
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput"><a href="#">Ver</a></button>
                    </div>
                </div>
                
            </div>
            <div>
                <img loading="lazy" src="img/Curso3.jpg" alt="Curso 7">
                <div class="cursosflex">
                    <div>
                        <h3>Arte Contemporaneo</h3>
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput"><a href="#">Ver</a></button>
                    </div>
                </div>
                
            </div>
            <div>
                <img loading="lazy" src="img/Curso10.jpeg" alt="Curso 8">
                <div class="cursosflex">
                    <div>
                        <h3>Quimica Analitica</h3>
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput"><a href="#">Ver</a></button>
                    </div>
                </div>
                
            </div>
            <div>
                <img loading="lazy" src="img/Curso9.jpg" alt="Curso 9">
                <div class="cursosflex">
                    <div>
                        <h3>Seguridad Industrial</h3>
                    </div>
                    <div class="BotonInscribirse">
                        <button class="BotonInscribirseInput"><a href="#">Ver</a></button>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
    <?php include 'vistas/footer.php'?>
    <script src="js/opciones.js"></script>
</body>
</html>
