<?php
// Declaración/definición de función
function addIVA($numero) {
  return $numero * 1.21;
}
// Esto es procedimiento
function saluda() {
  echo "Hola a todos<br>";
  echo "¿Como vais?";
}

function addIVAMejorado($valor, $factor=1.21) {
  return $valor * $factor;
}

saluda();
$resultado = addIVA(8);
echo $resultado;
echo "<br>";
echo addIVAMejorado(10);
echo "<br>";
echo addIVAMejorado(10, 1.0);
?>
