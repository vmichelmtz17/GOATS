<?php
// Realiza la conexión a la base de datos y obtén el resultado del partido
$resultado = obtenerResultadoDesdeBaseDeDatos();

// Devuelve el resultado como una respuesta JSON
echo json_encode($resultado);
?>
