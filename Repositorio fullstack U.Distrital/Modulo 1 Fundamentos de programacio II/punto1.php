<?php
$AS = $_POST["AS"];
$CAL = $_POST["CAL"];
$APROBACION = 80;

if ($AS >= $APROBACION) {
    if ($CAL >= 70) {
        echo "Aprobado";
    } else {
        echo "Reprobado";
    }
} else {
    echo "Reprobado";
}
?>
