<?php
//cor_exec.php

$cor = $_POST['cor'];

echo "<html>";
echo "<head></head>";

echo '<body style="background-color: ' . $cor . ' ;">';

echo "A cor escolhida foi: " . $cor;

echo "</body>";

echo "</html>";

