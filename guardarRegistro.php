<?php
require './recursos/conexion.php';
require_once './recursos/funciones.php';

$nombre = $_POST['nombre'];
$password = $_POST['password'];
$cedula = $_POST['cedula'];

if (ingresar_datos($conexion, $nombre, $cedula, $password)) {
    header("location:index.php?confirmacion=ok");
} else {
    echo '<script language="javascript">alert("Usario NO Creado");</script>';
}
