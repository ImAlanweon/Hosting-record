<?php
require_once('conexion.php');
$bd = conexionDB();
function generarClaveRegistro() {
    $bytesAleatorios = random_bytes(3);
    $claveRegistro = substr(bin2hex($bytesAleatorios), 0, 6);
    return $claveRegistro;
}

?>
