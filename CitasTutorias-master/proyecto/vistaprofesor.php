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
    <link rel="preload" href="css/vistaprofesor.css" as="style">
    <link rel="stylesheet" href="css/vistaprofesor.css">
    <link rel="stylesheet" href="css/normalice.css">
    <!--El preload nos ayuda a que de igual manera que con el css pero ahora con las paginas web, este caso es la primera pagina que uno piensa que es la que va a usar el usuario-->
    
    <!--link rel="prefetch" href="arte.html" as="Document">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"-->

</head>
<body>
    <header class="HeaderPrincipal">
        <div class="HeaderPrincipal--logo">
            <div class="HeaderPrincipal--logo1 comun">
                <a href="vistaalumno.html"><center><img src="img/logo_png_blanco.png" alt="Logo de la empresa"></center></a>
            </div>
            
        </div>
        <div class="Buscador">
            <input class="BuscadorInformacion" type="search" placeholder="Busqueda">
            <div class="botonbusqueda">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="HeaderPrincipal--Navegacion comun">
            <button class="link1" id="botonopciones" type="submit">
                <center><img src="img/profileicon.png" alt="ImagenPerfil"></center>
            </button>
            
        </div>
        <div class="OpcionesUsuario">
            <div class="OpcionesUsuarioPerfil12">
                <section id="Perfil12">
                    
                </section>
            </div>
            <div class="OpcionesUsuarioCerrarSesion">
                <section id="CerrarSesion">

                </section>
            </div>
        </div>
        
       
    </header>
    <main class="ContenidoPrincipal">
        <div>
            <h2 class="Titulo">Cursos Creados</h2>
        </div>
        <div class="Cursos"> 
            <div>
                <img class="imagenarte" loading="lazy" src="img/cursoprofarte.jpg" alt="Curso 1">
                <div class="cursosflex">
                    <div>
                        <h3>Cursos de Arte 2023 - 2024</h3>
                    </div>
                    <div class="BotonAdministrar">
                        <button class="BotonAdministrarInput"><a href="arteprof.html">Administrar</a></button>
                        <button class="BotonEliminarInput">Eliminar</button>
                    </div>
                </div>
               
            </div>
            <div>
                <img class="imagenmate" loading="lazy" src="img/cursoprofmate.jpg" alt="Curso 2">
                <div class="cursosflex">
                    <div>
                        <h3>Curso de Matematicas 2023 - 2024</h3>        
                    </div>
                    <div class="BotonAdministrar">
                        <button class="BotonAdministrarInput" ><a href="calculodiferencial.html">Administrar</a></button>
                        <button class="BotonEliminarInput">Eliminar</button>
                    </div>
                </div>

            </div>
            <div>
                <img class="imagenadmin" loading="lazy" srcset="img/cursoprofadmin.jpeg"alt="Curso3">
                <div class="cursosflex">
                    <div>
                        <h3>Curso de Administracion Empreciaral 2023 - 2025</h3>
                    </div>
                    <div class="BotonAdministrar">
                        <button class="BotonAdministrarInput"><a href="#">Administrar</a></button>
                        <button class="BotonEliminarInput">Eliminar</button>
                    </div>
                </div>
                
            </div>
            <div>
                <img class="imagenhistoria" loading="lazy" src="img/cursoprofhistoria.jpg" alt="Curso 4">
                <div class="cursosflex">
                    <div>
                        <h3>Curso de Historia Oct - Dic 2023</h3>
                    </div>
                    <div class="BotonAdministrar">
                        <button class="BotonAdministrarInput" ><a href="#">Administrar</a></button>
                        <button class="BotonEliminarInput">Eliminar</button>
                    </div>
                </div>
            </div>
            <div>
                <img class="imagenguitarra" loading="lazy" src="img/cursoprofguitarra.jpg" alt="Curso 5">
                <div class="cursosflex">
                    <div>
                        <h3>Curso de Guitarra 2023 - 2024</h3>
                    </div>
                    <div class="BotonAdministrar">
                        <button class="BotonAdministrarInput"><a href="#">Administrar</a></button>
                        <button class="BotonEliminarInput">Eliminar</button>
                    </div>
                </div>
                
            </div>
            <div>
                <img class="imageningles" loading="lazy" src="img/cursoprofingles.jpg" alt="Curso 6">
                <div class="cursosflex">
                    <div>
                        <h3>Curso de Ingles 2023 - 2025</h3>
                    </div>
                    <div class="BotonAdministrar">
                        <button class="BotonAdministrarInput"><a href="#">Administrar</a></button>
                        <button class="BotonEliminarInput">Eliminar</button>
                    </div>
                </div>
                
            </div>
            <div>
                <img class="imagennuevo" loading="lazy" src="img/cursoprofnuevo.jpeg" alt="Curso 7">
                <div class="cursosflex">
                
                </div>
                
    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-links">
                    <h4>Citas de tutoria</h4>
                    <ul>
                        <li><a href="#">¿Porque Date Corp?</a></li>
                        <li><a href="#">Nosotros</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Privacidad</h4>
                    <ul>
                        <li><a href="#">Aviso y privacidad</a></li>
                        <li><a href="#">Aviso de no discriminacion</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Siguenos</h4>
                    <div class="redessociales">
                        <a href="https://www.facebook.com/profile.php?id=61552327104638"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/datecorp/"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/datecorp2023"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/opciones.js"></script>
</body>
</html>
