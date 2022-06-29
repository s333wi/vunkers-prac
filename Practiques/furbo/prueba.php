<?php
    require './persones.php';
    
    $nom=$_GET['buscar'];
    echo $nom;
    $persona=new persones();
    $resultado=$persona->insert($nom);
?>

