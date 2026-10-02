<?php

$valor = 2;
$lista = ["rojo", "verde", "azul"];

/* -------------------------------
   1. IF / ELSEIF / ELSE
--------------------------------*/
echo "IF / ELSEIF / ELSE<br>";

if ($valor === 1) {
    echo "El valor es 1<br>";
} elseif ($valor === 2) {
    echo "El valor es 2<br>";
} else {
    echo "El valor es otro<br>";
}

/* -------------------------------
   2. SWITCH
--------------------------------*/
echo "<br>SWITCH<br>";

switch ($valor) {
    case 1:
        echo "Switch: uno<br>";
        break;
    case 2:
        echo "Switch: dos<br>";
        break;
    default:
        echo "Switch: otro<br>";
}

/* -------------------------------
   3. MATCH (PHP 8+)
--------------------------------*/
echo "<br>MATCH<br>";

$resultado = match ($valor) {
    1 => "Match: uno",
    2 => "Match: dos",
    default => "Match: otro"
};

$letra = "a";

$tipo = match ($letra) {
    "a", "e", "i", "o", "u" => "vocal",
    default => "consonante"
};

echo $tipo;  // vocal


echo $resultado . "<br>";

/* -------------------------------
   4. WHILE
--------------------------------*/
echo "<br>WHILE<br>";

$contador = 0;
while ($contador < 3) {
    echo "While: $contador<br>";
    $contador++;
}

/* -------------------------------
   5. DO-WHILE
--------------------------------*/
echo "<br>DO-WHILE<br>";

$contador2 = 0;
do {
    echo "Do-While: $contador2<br>";
    $contador2++;
} while ($contador2 < 3);

/* -------------------------------
   6. FOR
--------------------------------*/
echo "<br>FOR<br>";

for ($i = 0; $i < 3; $i++) {
    echo "For: $i<br>";
}

/* -------------------------------
   7. FOREACH
--------------------------------*/
echo "<br>FOREACH<br>";

foreach ($lista as $color) {
    echo "Foreach: $color<br>";
}

?>
