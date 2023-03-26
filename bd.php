<?php

$usuario = "302778";
$contraseña = "ayZykpQP23SvXyt";
$nombre_base_de_datos = "myinmobiliaria_bd";

try {
    return new PDO('mysql:host=mysql-myinmobiliaria.alwaysdata.net;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
} catch (Exception $e) {
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

?>