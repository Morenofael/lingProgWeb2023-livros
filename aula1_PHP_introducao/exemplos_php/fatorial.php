<?php

for($i=5; $i<=12; $i++) {
    
    $fat = $i;
    
    for($j=$i-1; $j>=1; $j--) {
    	$fat = $fat * $j;    
    } 
    
    echo "O fatorial de " . $i . " é " . $fat . "<br>";
    
}
