<?php ?>
<html>
    <head>
        <title>Document</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <h3>Registro</h3>
        <form action="agregar_usuario.php" method="post">
            <input type="text" name="nombre_usuario" placeholder="Ingresa usuario">
            <input type="text" name="contrasena" placeholder="Ingresa contraseña">
            <input type="text" name="contrasena2" placeholder="Ingresa otra vez pass">
            <button type="submit">Guardar</button>
        </form>
        
        <h3>Login</h3>
        <form action="login.php" method="post">
            <input type="text" name="nombre_usuario" placeholder="Ingresa usuario">
            <input type="text" name="contrasena" placeholder="Ingresa contraseña">
            <button type="submit">Guardar</button>
        </form>
    </body>
</html>

