<?php

$link = 'mysql:host=localhost;dbname=esuceveanu';
$usuari = 'esuceveanu';
$password = 'LEs]QYxBmN0SSoHp';
try {

   $pdo = new PDO($link, $usuari, $password);
   echo 'Conectado <br>';
    
} catch (PDOException $e) {

    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}