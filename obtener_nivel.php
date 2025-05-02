<?php
include 'conexion.php';
$ID_Pokemon=$_POST['ID_Pokemon'];
$ID_Entrenador=$_POST['ID_Entrenador'];
$query = "SELECT nivel FROM pokemon WHERE ID_entrenador = $ID_Entrenador AND ID_pokemon = $ID_Pokemon";

$sentencia=$conexion->prepare($query);
$sentencia->execute();

$resultado = $sentencia->get_result();
if($fila = $resultado->fetch_assoc()){
    //echo json_encode($fila,JSON_UNESCAPED_UNICODE);
    echo($fila["nivel"]);
}
$sentencia->close();
$conexion->close();
?>