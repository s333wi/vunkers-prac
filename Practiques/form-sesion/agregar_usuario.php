<?php

include_once '../yt_colores/conexion.php';

$usuari_nou = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

//VERIFICAR SI EXISTEIX
$sql = 'SELECT * FROM usuarios WHERE nombre=?';
$sent = $pdo->prepare($sql);
$sent->execute(array($usuari_nou));
$resultado = $sent->fetch();
var_dump($resultado);

if($resultado){
    echo'<br>Existe usuario';
    die();
}

//HASH PASS
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
if (password_verify($contrasena2, $contrasena)) {
    echo 'Contraseña valida<br>';
    $sql_insertar = 'INSERT INTO usuarios (nombre,contrasena) VALUES (?,?)';
    $sentencia_afegir = $pdo->prepare($sql_insertar);
    
    if($sentencia_afegir->execute(array($usuari_nou, $contrasena))){
        echo 'Agegado<br>';
    } else {
        echo'Error<br>';
    }
   
    $pdo = null;
    $sentencia_afegir = null;
    
} else {
    echo 'Contraseña no valida';
}
echo '<pre>';
var_dump($usuari_nou);
var_dump($contrasena);
var_dump($contrasena2);
echo '<pre>';

