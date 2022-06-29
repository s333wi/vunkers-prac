<?php
$user = unserialize($_COOKIE['info_user']);
$color = $user['color'];
$nom = $user['user'];
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <style>
        form{
            display: inline-block;
        }
        * {
            box-sizing: border-box;
        }
        body {
            background:<?= $color ?>;
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
    <body>

        <div class='row justify-content-center'>
            <form action="cookies.php" method="post">
                <p>Usuari conectat <?= $user_info['user'] ?> 
                </p>
                <p>Escull el teu color
                    <input type="color" name='color' class="form-control form-control-color" id="exampleColorInput" value="<?= $color ?>" title="Choose your color"></p>
                <p><input type="submit" name='submit' value="profile"></span></p>
            </form>
        </div>
    </body>
</html>

