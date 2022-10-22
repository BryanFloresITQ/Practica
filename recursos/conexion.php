<?php
$conexion = new mysqli ("localhost","root","","wace");
if ($conexion->connect_error) {
    echo "Error en la Conexión del Servido".$conexion->connect_errno."<br> Detalle del Problema: ".$conexion->connect_errno;
}

