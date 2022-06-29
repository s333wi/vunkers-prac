<?php
//LLEGIR
include_once './conexion.php';

$sql_leer = 'SELECT * FROM colores';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

//AFEGIR
if (!empty($_POST['submit']) && $_POST['submit'] == 'Agregar' &&
        !(empty($_POST['color']) || empty($_POST['descripcion']))) {

    $color = $_POST['color'];
    $descripcion = $_POST['descripcion'];
    $sql_insertar = 'INSERT INTO colores (color,descripcion) VALUES (?,?)';
    $sentencia_afegir = $pdo->prepare($sql_insertar);
    $sentencia_afegir->execute(array($color, $descripcion));
    
    $pdo=null;
    $sentencia_afegir=null;
    header("Location:index.php");
} elseif (!empty($_POST['submit']) && (empty($_POST['color']) || empty($_POST['descripcion']))) {
    echo '<div class="alert alert-danger">
                <a href="index.php" class="close float-end" data-dismiss="alert" aria-label="close">Tornar X</a>
                <p><strong>Alerta!</strong></p>
                <p>Els camps color i descripcio son obligatoris</p>
            </div>';
}
//PER EDITAR

if (!empty($_GET)) {
    $id = $_GET['id'];
    $sql_unic = 'SELECT * FROM colores WHERE id=?';
    $gsent_unic = $pdo->prepare($sql_unic);
    $gsent_unic->execute(array($id));
    $resultado_unic = $gsent_unic->fetch();

    $pdo=null;
    $gsent_unic=null;
    //var_dump($resultado_unic);
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            a {
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <?php foreach ($resultado as $dato): ?>
                        <div 
                            class="alert alert-<?= $dato['color'] ?> text-uppercase" 
                            role="alert">
                                <?= $dato['color'] ?>
                            -
                            <?= $dato['descripcion'] ?>

                            <a href="eliminar.php?id=<?= $dato['id'] ?>" class="float-end ml-6"><i class="fa-solid fa-trash-can"></i></a>


                            <a href="index.php?id=<?= $dato['id'] ?>" class="float-end"><i class="fa-solid fa-pencil"></i></a>

                        </div>
                    <?php endforeach ?>
                </div>
                <div class="col-md-6 text-center">
                    <?php if (empty($_GET)): ?>
                        <h2>Afegir elements</h2>
                        <form method="POST">
                            <input type="text" class="form-control" name="color">
                            <input type="text" class="form-control mt-3" name="descripcion">
                            <input class='btn btn-warning btn-lg btn-block mt-3' type="submit" name='submit' value="Agregar">
                        </form>
                    <?php endif ?>

                    <?php if (!empty($_GET)): ?>
                        <h2>Editar</h2>
                        <form method="GET" action="editar.php">
                            <input type="text" class="form-control" name="color" value="<?= $resultado_unic['color'] ?>">
                            <input type="text" class="form-control mt-3" name="descripcion" value="<?= $resultado_unic['descripcion'] ?>">
                            <input type="hidden" value="<?= $resultado_unic['id'] ?>" name="id">
                            <input class='btn btn-warning btn-lg btn-block mt-3' type="submit" name='submit' value="Editar">
                        </form>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>