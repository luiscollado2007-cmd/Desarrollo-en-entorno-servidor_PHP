<?php

$a = 5;
$b = "5";

var_dump($a == $b);   // true
var_dump($a === $b);  // false

var_dump($a != 8);    // true
var_dump($a !== $b);  // true

var_dump(5 <=> 8);    // -1

$nombre = null;
echo $nombre ?? "Anónimo";  // Anónimo

var_dump($a > 0 && $a < 10); // true
var_dump($a < 0 || $a == 5); // true
?>