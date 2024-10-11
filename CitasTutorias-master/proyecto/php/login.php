<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="login_alum";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if($cone->connect_error){
        die("ConexionExitosa".$cone->connect_error);
    }
    $username=$_POST['Usuario'];
    $contra= $_POST['contrasena'];
    
    $sql="SELECT nombre,contrasenia,codigo FROM alumnos 
    WHERE nombre= '$username' AND contrasenia='$contra'";
    $result=$cone->query($sql);

    if($result->num_rows>0){
        session_start();
        $_SESSION['Usuario']=$username;
        header("Location: ../vistaalumno.php");
    }else{
        header("Location: ../loginalum.php");
    }
    $cone->close();

?>