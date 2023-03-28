<?php
    echo "<h2>Exercício 3 - Arrays</h2>";
    
    $carro = array("modelo" => "Polo",
                  "marca" => "Volkswagen",
                  "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ773FjRJgfC58OplqcafaXI7cJWoLZpAtRsWPZK1tRxQ&s");

    $carro2 = array("modelo" => "Onix",
                  "marca" => "Chevrolet",
                  "foto" => "https://image1.mobiauto.com.br/images/api/images/v1.0/12017711/transform/fl_progressive,f_webp,q_70");


    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    
    echo $carro['modelo'] . "<br>";
    echo $carro['marca'] . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" . $carro['foto'] . "' </><br>";

    echo "</div>";
    
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    
    echo $carro2['modelo'] . "<br>";
    echo $carro2['marca'] . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" . $carro2['foto'] . "' </><br>";

    echo "</div>";
?>
