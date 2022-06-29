<?php

echo '<pre>';
var_dump($_POST);
echo '<pre>';

$opcio = $_POST['submit'];
$opcio = rtrim($opcio, ' ');
$opcio = explode(' ', $opcio);
var_dump($opcio);
if ($opcio[0] == 'Tornar') {
    header('Location:../inici.php');
}

