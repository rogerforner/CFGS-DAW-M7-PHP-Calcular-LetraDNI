<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Funciones
//# Valores
//# Resultado
//# *********************************************************************

//# Funciones
//# ---------------------------------------------------------------------
function letra($numeros) {
  //Array con las letras posibles. Éstas tienen un orden específico.
  //http://recursostic.educacion.es/descartes/web/materiales_didacticos/divisibilidad/dni.htm
  $letras = array(
    'T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z',
    'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'
  );
  //La letra del DNI es el resto de la divisón del número introducido % 23.
  $resto = $numeros % 23;

  //La letra se correspondrá al índice que nos determine el resto.
  //Es decir, el resto determina la letra que se va a obtener del array.
  $letra = $letras[$resto];

  return $letra;
}

//# Valores
//# ---------------------------------------------------------------------
//Obtener el valor introducido en el campo Números.
$numeros = $_POST['numeros']; //name="numeros"

//# Resultado
//# ---------------------------------------------------------------------
//Mostramos los números $numeros y llamamos la función letra() para mostrar
//la letra
echo "El DNI con letra es: " . $numeros . "-" . letra($numeros);
?>
