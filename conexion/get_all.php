<?php
require_once 'db_connect.php';
$response = array();
$query = "SELECT * FROM comentarios";
$resultado=$mysqli->query($query);
if (mysqli_num_rows($resultado) > 0) {
$response["comentarios"] = array();
while ($rows = $resultado->fetch_assoc()) {
$obj=array();
$obj["nombre"]=$rows["nombre"];
$obj["correo"]=$rows["correo"];
$obj["comentario"]=$rows["comentario"];

array_push($response["comentarios"],$obj);
}
$response["success"] = 1;
echo json_encode($response);
}
else{
    $response["success"] = 0;
    $response["message"] = "No se encontraron datos tipo_usuario";
    echo json_encode($response);
}
?>﻿