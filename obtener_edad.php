<?php

# Función para obtener la edad de acuerdo a una fecha conocida
function getAge($birthday) {
    $birth = strtotime($birthday);
    $now = strtotime('now');
    $age = ($now - $birth) / 31536000;
    return floor($age);
}

echo "Actualmente tengo " . getAge('1985-10-06') . " años";