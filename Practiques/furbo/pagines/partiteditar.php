<?php
require_once '../clases/partit.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$partit = new Partit();
if (!isset($_POST['submit'])) {
    $id = $_GET['id'];
    $resultat = $partit->get($id);
} else {
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';
    $id = $_POST["id"];
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    $resultatpartit = $_POST["resultat"];
    $arbit = $_POST["id_arbit"];
    $equip1 = $_POST["equip1"];
    $equip2 = $_POST["equip2"];

    $partit->update([$dia, $hora, $resultatpartit, $arbit, $equip1, $equip2, $id]);
   
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
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="dia" value="<?= $resultat->dia ?>">
                            </div>
                            <div class="col-md-4 ">
                                <input type="text" class="form-control" name="hora" value="<?= $resultat->hora ?>">
                            </div>
                            <div class="col-md-4 ">
                                <input type="text" class="form-control" name="resultat" value="<?= $resultat->resultat ?>">
                            </div>
                        </div>
                        <div class="row mt-3 text-center">
                            <div class="col-md-4 ">
                                <input type="text" class="form-control" name="id_arbit" value="<?= $resultat->id_arbit ?>">
                            </div>
                            <div class="col-md-4 ">
                                <input type="text" class="form-control" name="equip1" value="<?= $resultat->equip1 ?>">
                            </div>
                            <div class="col-md-4 ">
                                <input type="text" class="form-control" name="equip2" value="<?= $resultat->equip2 ?>">
                            </div>
                            <div class="row mt-3 text-center">
                                <div >
                                    <input class="btn btn-danger btn-block btn-lg mb-1" type='submit' name='submit' id='submit' value='Editar'>            
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>



