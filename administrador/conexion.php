<?php 
$conexion = new mysqli('localhost','cbtised5_abr_ap','Root0101','cbtised5_sistema');
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
?>