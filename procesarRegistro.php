<?php
require_once('conexion.php');
$bd = conexionDB();
require_once('claveUnica.php');
$claveRegistro = generarClaveRegistro();
if(empty($_POST["nombre"]) || empty($_POST["direccion"]) || empty($_POST["genero"]) || empty($_POST["edad"]) ||  empty($_POST["zona"]) || empty($_POST["total"])){
       header('Location: index.php?mensaje=falta');
       exit();
    }
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$genero = $_POST["genero"];
$edad = $_POST["edad"];
$zona = $_POST["zona"];
$total = $_POST["total"];


$sentencia = $bd->prepare("INSERT INTO hospedaje(nombre,direccion,genero,edad,zona,total,claveRegistro) VALUES (?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$direccion,$genero,$edad,$zona,$total,$claveRegistro]);

    if ($resultado === TRUE) {
        // Redireccionar a index.php y pasar el mensaje de éxito en la URL
        header('Location: index.php?mensaje=su clave de registro es '.$claveRegistro .'&status=success');
        exit();
    } else {
        // Redireccionar a index.php y pasar el mensaje de error en la URL
        header('Location: index.php?mensaje=error&status=error');
        exit();
    }
    
?>