<?php
include_once '../yt_colores/conexion.php';
session_start();

$usuario_login = $_POST['nombre_usuario'];
$contrasena_login = $_POST['contrasena'];

$sql = 'SELECT * FROM usuarios WHERE nombre=?';
$sent = $pdo->prepare($sql);
$sent->execute(array($usuario_login));
$resultado = $sent->fetch();

if(!$resultado){
    echo 'No existeix el usuari';
    die();
}

print_r($resultado['contrasena']);
if (password_verify($contrasena_login, $resultado['contrasena'])) {
    //Contrasenya valida
    $_SESSION['admin'] = $usuario_login;
    header('Location:restringit.php');
} else {
    echo 'Contrasenya incorrecta';
    die();
}