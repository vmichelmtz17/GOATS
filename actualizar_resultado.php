<?php
// Simulación de obtención del resultado actualizado del partido
function obtenerResultadoEnVivo() {
  // Aquí deberías implementar la lógica para obtener el resultado en tiempo real desde tu fuente de datos (API, base de datos, etc.)
  
  // En este ejemplo, generaremos un resultado aleatorio para fines de demostración
  $resultado = rand(0, 5) . "-" . rand(0, 5);
  
  return $resultado;
}

// Llamada a la función para obtener el resultado actualizado
$resultado = obtenerResultadoEnVivo();

// Devolución del resultado como respuesta
echo $resultado;
?>
