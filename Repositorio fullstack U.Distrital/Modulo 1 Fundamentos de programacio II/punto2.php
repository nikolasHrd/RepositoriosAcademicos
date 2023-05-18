<?php
$RC = $_POST["RC"];
$RI = $_POST["RI"];
$RB = $_POST["RB"];

$PRC = $RC * 4;
$PRI = $RI * (-1);

$PF = $PRC + $PRI;

echo "El puntaje final es: " . $PF;
?>
