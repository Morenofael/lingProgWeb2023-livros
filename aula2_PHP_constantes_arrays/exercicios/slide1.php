<?php
$pesoas = array("Felipe", "Maria", "Carla", "Farid", "Bernardo");
$carros = array("Brasilia", "Opala", "Ômega", "Ipanema", "Polo");
$frutas = array("Melão", "Maça", "Uva", "Melancia", "Pera");
$numRomanos = array("I", "V", "X", "L", "C");

$linhas = array($pesoas, $carros, $frutas, $numRomanos);

echo "<h2>Exercício 1</h2>";

echo "<table border=1>";

foreach($linhas as $l) {
    echo "<tr>";
    foreach($l as $val) {
        echo "<td>" . $val . "</td>";
    }
    echo "</tr>";
}

/*
echo "<tr>";
foreach($pesoas as $p) {
    echo "<td>" . $p . "</td>";
}
echo "</tr>";
*/

echo "</table>";



