<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista_PerfilAlum.css">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/Vista_PerfilAlum.css">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <header class="HeaderVistaProfile">
        <div class="HeaderVistaProfileTitulo">
            <div class="TituloPerfil">
                <h1>Perfil de Usuario</h1>
            </div>
            
        </div>
        <div class="HeaderVistaProfileImagen">
            <a href="vistaalumno.php"><img class="ImagenLogo" src="img/logo_png_blanco.png" alt=""></a>
        </div>
    </header>
    <div class="contenedor">
        <div class="profile-picture">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Imagen de perfil">
        </div>
        <div class="user-info">
            <h1>Nombre del Alumno</h1>
            <p>Email: usuario@correo.com</p>
            <p>Ciudad: Durango</p>
            <p>Región: Victoria de Durango</p>
            <p>País: Mexico</p>
        </div>
        <div class="activity">
            <h2>Actividad de Inicio de Sesión</h2>
            <ul>
                <li>Fecha y hora: 2023-10-07 14:30</li>
                <li>Ubicación: Durango</li>
                <li>Dispositivo: PC con Windows</li>
            </ul>
        </div>
        <div class="courses">
            <h2>Cursos Inscritos</h2>
            <ul>
                <li>Curso 1: Matemáticas Avanzadas</li>
                <li>Curso 2: Programación en Python</li>
                <li>Curso 3: Diseño Web</li>
            </ul>
        </div>
    </div>
    <?php include 'vistas/footer.php'?>
</body>
</html>
