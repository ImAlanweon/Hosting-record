<?php 
function conexionDB() {
    $contrasena = "";
    $usuario = "root";
    $hosting_bd = "hosting_record";
    try {
        $bd = new PDO (
            'mysql:host=localhost;
            dbname='.$hosting_bd,
            $usuario,
            $contrasena,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bd;
    } catch (Exception $e) {
        echo "Problema con la conexión: ".$e->getMessage();
        return null;
    }
}

?>