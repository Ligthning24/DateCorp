<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesorias Agendadas</title>
    <meta name="description" content="Pagina sobre cursos">
    <!--El preload nos ayuda a que el archivo que le estamos diciendo sea el primero que cargue-->
    <link rel="preload" href="css/vistaalumno.css" as="style">
    <link rel="stylesheet" href="css/asesoriasagendadas.css">
    <link rel="stylesheet" href="css/normalice.css">
    <!--El preload nos ayuda a que de igual manera que con el css pero ahora con las paginas web, este caso es la primera pagina que uno piensa que es la que va a usar el usuario-->
    <link rel="prefetch" href="arte.php" as="Document">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
</head>
<body>
    <?php include 'vistas/header.php'?>
    <main class="ContenidoPrincipal">
        <div>
            <h2 class="Titulo">Asesorias Agendadas</h2>
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
                        <button class="BotonInscribirseInput" type="button" id="BotonNotificacion"><a href="cursoartealumno.php">Ver</a></button>
                    </div>
                </div>
        </div>
    </main>
    <?php include 'vistas/footer.php'?>
    
</body>
</html>
