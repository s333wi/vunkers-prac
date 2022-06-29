<?php

echo 'editar.php?id=1&color=success&descripcion=Este es el color verde';
if (!empty($_GET['submit']) && $_GET['submit'] == 'Editar' &&
        !(empty($_GET['color']) || empty($_GET['descripcion']))) {
    $id = $_GET['id'];
    $color = $_GET['color'];
    $descripcion = $_GET['descripcion'];

    include_once './conexion.php';

    $sql_editar = 'UPDATE colores SET color=?,descripcion=? WHERE id=?';
    $sent_editar = $pdo->prepare($sql_editar);
    $sent_editar->execute(array($color, $descripcion, $id));
    
    $pdo=null;
    $sent_editar=null;
    header('Location:index.php');
} else {
    echo '<div class="alert alert-danger">
                <p><strong>Alerta!</strong></p>
                <p>Els camps color i descripcio son obligatoris</p>
                <a href="index.php" class="close float-end" data-dismiss="alert" aria-label="close">Tornar X</a>
            </div>';
}
