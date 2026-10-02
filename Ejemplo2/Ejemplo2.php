<?php
$bool = true;
$entero = 26;
$hex = 0x1A;
$octal = 032;
$float = 3.1416;
$texto = "25";
// array indexado
$colores = ["rojo", "verde", "azul"];
// array asociativo
$persona = [
    "nombre" => "Paco",
    "edad" => 35
];
// cualquier variable puede tomar el valor null como ausencia de valor
$nulo = null;

$archivo = fopen(__FILE__, "r");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tipos de datos en PHP</title>
<style>
body{font-family:Arial;margin:30px}
pre{background:#f4f4f4;padding:10px}
</style>
</head>
<body>

<h1>Tipos de datos, verificación y conversión</h1>

<h2>1. Tipos escalares</h2>

<pre><?php
echo "Booleano: ";
/*var_dump es una función de depuración de PHP que muestra información
 completa sobre una variable: tipo, valor y, cuando procede, tamaño 
 o estructura interna. */
var_dump($bool);

echo "Entero decimal: ";
var_dump($entero);

echo "Entero hexadecimal (0x1A): ";
var_dump($hex);

echo "Entero octal (032): ";
var_dump($octal);

echo "Float: ";
var_dump($float);

echo "String: ";
var_dump($texto);
?></pre>

<h2>2. Tipos compuestos (array)</h2>

<pre><?php
//print_r muestra el contenido y 
// la estructura de una variable (sobre todo arrays y objetos) de forma legible
print_r($colores);
echo "\n";
print_r($persona);
?></pre>

<h2>3. Tipos especiales</h2>

<pre><?php
echo "Null: ";
var_dump($nulo);

echo "Resource: ";
var_dump($archivo);
?></pre>

<h2>4. Verificación de tipos</h2>

<pre><?php
echo "Tipo de \$texto: " . gettype($texto) . "\n";

echo "is_numeric(\$texto): ";
var_dump(is_numeric($texto));

echo "is_array(\$persona): ";
var_dump(is_array($persona));

echo "is_string(\$texto): ";
var_dump(is_string($texto));

echo "is_int(\$entero): ";
var_dump(is_int($entero));
?></pre>

<h2>5. Conversión (casting)</h2>

<pre><?php
echo "(int) \"25\" = ";
var_dump((int)$texto);

echo "(float) \"25\" = ";
var_dump((float)$texto);

echo "(bool) 0 = ";
var_dump((bool)0);

echo "(string) 26 = ";
var_dump((string)$entero);
?></pre>

<h2>6. Conversión con settype()</h2>

<pre><?php
$valor = "19.8";

echo "Antes: ";
var_dump($valor);

settype($valor, "float");

echo "Después: ";
var_dump($valor);
?></pre>

</body>
</html>

<?php
fclose($archivo);