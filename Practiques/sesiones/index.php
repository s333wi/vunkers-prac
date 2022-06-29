<?php
session_start();
?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <a href="sesion.php">Iniciar sesion</a>
        <a href="protegido.php">Contenido protegido</a>
        <h1>Bienvenido: </h1><?= isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Invitado'?>
    </body>
</html>
