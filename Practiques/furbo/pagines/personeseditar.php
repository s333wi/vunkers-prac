<?php
require_once '../clases/persones.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_POST['submit'])) {
    $id = $_GET['id'];
    $person = new persones();
    $resultat = $person->get($id);
} else {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $edat = $_POST['edat'];
    echo 'post';
    $persona = new persones();
    $persona->update([$nom, $dni, $email, $edat, $id]);
    header('Location:../vistes/personavista.php');
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
                            <div class="col-md-2 offset-2
                                 ">
                                <input type="text" class="form-control" name="nom" value="<?= $resultat->nom ?>">
                            </div>
                            <div class="col-md-2 ">
                                <input type="text" class="form-control" name="dni" value="<?= $resultat->dni ?>">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="email" value="<?= $resultat->email ?>">                            
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="edat" value="<?= $resultat->edat ?>">
                            </div>
                            <div class="col-md-1">
                                <input class="btn btn-danger btn-block btn-sm mb-1" type='submit' name='submit' id='submit' value='Editar'>            
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


