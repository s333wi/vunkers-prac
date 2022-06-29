<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../clases/persones.php';
?>

<html>
   <?php
//Conseguir persones
    $persones = new persones();
    $resultat = $persones->fetch_All();

    if (!empty($_GET['id']) && !empty($_GET['del'])) {
        $id = $_GET['id'];
        $persones->delete($id);
    }

    if (!empty($_POST['submit'])) {
        $dni = $_POST['dni'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $edat = $_POST['edat'];
        $persones->insert([$dni, $nom, $email, $edat]);
    }
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mt-4 ">GESTOR BBDD</h2>
                    <hr>
                    <form method="POST"  action="<?= $_SERVER['PHP_SELF']; ?>" class="text-center">
                        <div class="row mt-3">
                            <div class="col-md-2 ">
                                <p>ID</p>
                            </div>
                            <div class="col-md-2">
                                <p>NOM</p>
                            </div>
                            <div class="col-md-2">
                                <p>DNI</p>
                            </div>
                            <div class="col-md-2">
                                <p>EMAIL</p>
                            </div>
                            <div class="col-md-2">
                                <p>EDAT</p>
                            </div>
                        </div>

                        <?php foreach ($resultat as $persona) { ?>
                            <div class="row mt-4">
                                <div class='col-md-2 '>
                                    <?= $persona->id ?>
                                </div>
                                <div class='col-md-2'>
                                    <?= $persona->nom ?>
                                </div>    
                                <div class='col-md-2'>
                                    <?= $persona->dni ?>
                                </div>    
                                <div class='col-md-2'>
                                    <?= $persona->email ?>
                                </div>    
                                <div class='col-md-2'>
                                    <?= $persona->edat ?>
                                </div>    
                                <div class="col-md-1">
                                    <a href="../pagines/personeseditar.php?id=<?= $persona->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='edit' id='edit' value='Editar'></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="personavista.php?del=1&&id=<?= $persona->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='del' id='del' value='Borrar'></a>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row mt-3">
                            <div class="col-md-2 offset-2">
                                <input type="text" class="form-control" name="nom" placeholder="NOM">
                            </div>
                            <div class="col-md-2 ">
                                <input type="text" class="form-control" name="dni" placeholder="DNI">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="email" placeholder="EMAIL">                            
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="edat" placeholder='EDAT'>
                            </div>
                            <div class="col-md-2">
                                <input class="btn btn-danger btn-block btn-sm mb-1" type='submit' name='submit' id='submit' value='Insertar'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>