<?php
require_once '../clases/equip.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$equip = new Equip();
if (!isset($_POST['submit'])) {
    $id = $_GET['id'];
    $resultat = $equip->get($id);
  
} else {
     echo '<pre>';
    print_r($_POST);
    echo '<pre>';
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $id_president = $_POST['id_president'];
    
    $equip->update([$nom,$id_president,$id]);
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
                            <div class="col-md-5 
                                 ">
                                <input type="text" class="form-control" name="nom" value="<?= $resultat->nom ?>">
                            </div>
                            <div class="col-md-5 ">
                                <input type="text" class="form-control" name="id_president" value="<?= $resultat->id_president?>">
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


