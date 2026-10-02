<?php

// 1. VARIABLES
$nombre = "Paco";
$edad = 54;

echo $nombre . "<br>";
echo $edad . "<br>";


// 2. ASIGNACIÓN POR VALOR
$a = 10;
$b = $a;

$b = 20;

echo "a = " . $a . "<br>"; // 10
echo "b = " . $b . "<br>"; // 20


// 3. ASIGNACIÓN POR REFERENCIA
$a = 10;
$c = &$a;

$c = 30;

echo "a = " . $a . "<br>"; // 30
echo "c = " . $c . "<br>"; // 30


// 4. CONSTANTES
define("PI", 3.1416);
const IVA = 0.21;

echo "PI = " . PI . "<br>";
echo "IVA = " . IVA . "<br>";


// 5. CONSTANTES MÁGICAS
echo "Fichero: " . __FILE__ . "<br>";
echo "Directorio: " . __DIR__ . "<br>";
echo "Línea: " . __LINE__ . "<br>";


// 6. isset()
$usuario = "Ana";

var_dump(isset($usuario)); // true
echo "<br>";

var_dump(isset($variableQueNoExiste)); // false
echo "<br>";


// 7. empty()
$numero = 0;

var_dump(empty($numero)); // true
echo "<br>";


// 8. unset()
$nombre = "Paco";

unset($nombre);

var_dump(isset($nombre)); // false

?>