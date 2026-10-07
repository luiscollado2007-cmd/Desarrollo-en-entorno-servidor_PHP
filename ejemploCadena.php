<?php

// ============================================================
// CADENAS DE TEXTO EN PHP
// ============================================================

$texto = "  Hola Mundo desde PHP  ";


// ------------------------------------------------------------
// 1. strlen() -> devuelve la longitud de una cadena
// ------------------------------------------------------------

echo "Longitud: " . strlen($texto) . "<br>";


// ------------------------------------------------------------
// 2. trim() -> elimina espacios al principio y al final
// ------------------------------------------------------------

$texto = trim($texto);

echo "Texto sin espacios: " . $texto . "<br>";


// ------------------------------------------------------------
// 3. strtoupper() -> convierte a mayúsculas
// ------------------------------------------------------------

echo "Mayúsculas: " . strtoupper($texto) . "<br>";


// ------------------------------------------------------------
// 4. strtolower() -> convierte a minúsculas
// ------------------------------------------------------------

echo "Minúsculas: " . strtolower($texto) . "<br>";


// ------------------------------------------------------------
// 5. ucfirst() -> pone en mayúscula la primera letra
// ------------------------------------------------------------

echo "Primera letra en mayúscula: " . ucfirst(strtolower($texto)) . "<br>";


// ------------------------------------------------------------
// 6. ucwords() -> pone en mayúscula la primera letra
//    de cada palabra
// ------------------------------------------------------------

echo "Primera letra de cada palabra: " . ucwords(strtolower($texto)) . "<br>";


// ------------------------------------------------------------
// 7. str_contains() -> comprueba si una cadena contiene
//    otra cadena
// ------------------------------------------------------------

if (str_contains($texto, "Mundo")) {
    echo "El texto contiene la palabra Mundo<br>";
}


// ------------------------------------------------------------
// 8. strpos() -> devuelve la posición donde aparece
//    una cadena
// ------------------------------------------------------------

$posicion = strpos($texto, "Mundo");

echo "La palabra Mundo empieza en la posición: " . $posicion . "<br>";


// ------------------------------------------------------------
// 9. str_replace() -> sustituye una cadena por otra
// ------------------------------------------------------------

$nuevoTexto = str_replace("Mundo", "alumnos", $texto);

echo "Texto modificado: " . $nuevoTexto . "<br>";


// ------------------------------------------------------------
// 10. strrev() -> invierte una cadena
// ------------------------------------------------------------

echo "Texto invertido: " . strrev($texto) . "<br>";


// ------------------------------------------------------------
// 11. explode() -> convierte una cadena en un array
//     utilizando un separador
// ------------------------------------------------------------

$palabras = explode(" ", $texto);

echo "Primera palabra: " . $palabras[0] . "<br>";
echo "Segunda palabra: " . $palabras[1] . "<br>";


// ------------------------------------------------------------
// 12. foreach -> recorre los elementos de un array
// ------------------------------------------------------------

echo "Palabras del texto:<br>";

foreach ($palabras as $palabra) {
    echo $palabra . "<br>";
}


// ------------------------------------------------------------
// 13. implode() -> convierte un array en una cadena
//     utilizando un separador
// ------------------------------------------------------------

$textoConGuiones = implode("-", $palabras);

echo "Palabras unidas con guiones: " . $textoConGuiones . "<br>";


// ------------------------------------------------------------
// 14. Recorrer una cadena carácter a carácter
// ------------------------------------------------------------

echo "Caracteres del texto:<br>";

for ($i = 0; $i < strlen($texto); $i++) {
    echo $texto[$i] . "<br>";
}
