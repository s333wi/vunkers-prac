<?php
require_once '../clases/futbolistes.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$futbolista=new Futbolista();
if (!isset($_POST['submit'])) {
    $id = $_GET['id'];
    $resultat = $futbolista->get($id);
} else {
     echo '<pre>';
    print_r($_POST);
    echo '<pre>';
    $id = $_POST['id'];
    $id_persona = $_POST['id_persona'];
    $posicio = $_POST['posicio'];
    $dorsal = $_POST['dorsal'];
    $id_equip = $_POST['id_equip'];
    
    $futbolista->update([$id_persona,$posicio,$dorsal,$id_equip,$id]);
}

include '../bootstrap.php';
?>

<html>
    <head>
        <title>Editar</title>
    </head>
    <body>
        <div class='col-md-6 mx-auto'>
            <div class='card'> 
                <div class="card-header text-center ">Insertar dades:
                    <form name="form1" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                        <div class="row mt-3 text-center">
                            <div>
                                <input type="hidden" name="id" id="id" value="<?= $resultat->id ?>">    
                            </div>
                            <div class="col-md-2 offset-1">
                                <input type="text" class="form-control" name="id_persona" value="<?= $resultat->id_persona ?>">
                            </div>
                            <div class="col-md-2 ">
                                <input type="text" class="form-control" name="posicio" value="<?= $resultat->posicio?>">
                            </div>
                            <div class="col-md-2 ">
                                <input type="text" class="form-control" name="dorsal" value="<?= $resultat->dorsal?>">
                            </div>
                            <div class="col-md-2 ">
                                <input type="text" class="form-control" name="id_equip" value="<?= $resultat->id_equip?>">
                            </div>
                            
                            <div class="col-md-2">
                                <input class="btn btn-danger btn-block btn-sm mb-1" type='submit' name='submit' id='submit' value='Editar'>            
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


