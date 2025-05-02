<?php
include 'conexion.php';

$exp = $_GET['exp'];
$ID_Entrenador = $_GET['ID_entrenador'];
$ID_Pokemon = $_GET['ID_pokemon'];

$query = "UPDATE pokemon SET experiencia = $exp WHERE ID_entrenador = $ID_Entrenador AND ID_pokemon = $ID_Pokemon;";

$query = mysqli_prepare($conexion, "UPDATE pokemon SET experiencia = ? WHERE ID_entrenador = ? AND ID_pokemon = ?");
// iii por que son 3 ints
mysqli_stmt_bind_param($query, 'iii', $exp, $ID_Entrenador, $ID_Pokemon);

// validamos que se enviaron los campos
// esto es igual a un if else
// expresion_a_evaluar ? si_es_true : si_no_else;

$exp = isset($_GET['exp']) ? $_GET['exp'] : 0;
$ID_Entrenador = isset($_GET['ID_entrenador']) ?  $_GET['ID_entrenador'] : 0 ;
$ID_Pokemon = isset($_GET['ID_pokemon']) ?  $_GET['ID_pokemon'] : 0 ;

// validamos que no sea alguan 0
if ( !$ID_Entrenador || !$ID_Pokemon){
  // finalizamos la ejecucion
  die("uno o ambos parametro sin definir!");
}

// si ambos estan definidos
// continuamos con la ejecucion
mysqli_stmt_execute($query);
  
$conexion->close();
?>