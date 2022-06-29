<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                background: #333;
                color: white;
                font-family: sans-serif;
            }

            form {
                width: 500px;
                margin: auto;
                background: #555;
                padding: 20px;
                margin-top: 20px;
            }
            h1 {
                text-align: center;
                margin-bottom: 20px;
                margin-top: 0;
            }
            label, input,select {
                width: 100%;
                display: block;
                font-size: 1.2em;
            }
            input, select {
                padding: 5px;
                margin-bottom: 20px;
            }
            input[type="submit"] {
                width: 30%;
                margin: auto;
                background: #333;
                color: white;
                border: none;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <h1>Promedios</h1>
            <label>Nombre:</label>
            <input type="text" name="nombre">
            <label>Nota 1:</label>
            <input type="text" name="nota1">
            <label>Nota 2:</label>
            <input type="text" name="nota2">
            <label>Nota 3:</label>
            <input type="text" name="nota3">
            <input type="submit" value="Calcular" name="submit">
            <?php
            if (isset($_POST['submit'])) {
                $nombre = $_POST['nombre'];
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];
                $promedio = ($nota1 + $nota2 + $nota3) / 3;
                echo "<p>{$nombre}, tu promedio es: {$promedio}</p>";
            }
            ?>
        </form>
    </body>
</html>
