<?php

$dinero = 2000;

if ($dinero > 3000) {
    echo 'Puedo ir al cine';
} else {
    echo 'No puedo ir al cine';
}


//Switch 
$opcio = 'webo';

switch ($opcio) {
    case 'pizza':
        echo 'El valor de la pizza es de 1000';
        break;
    case 'helado':
        echo 'El valor del helado es de 1111';
        break;
    case 'tortilla':
        echo 'La tortilla tiene un valor de 1234';
        break;
    default:
        echo 'Opcio no valida';
        break;
}

$i = 1;
while ($i < 10) {
    echo $i . '</br>';
    $i++;
}

$i = 1;
do {
    echo$i . '</br>';
    $i++;
} while ($i = 0);
