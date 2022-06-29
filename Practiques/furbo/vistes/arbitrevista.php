
<html>
    <?php
    //Conseguir persones
    include_once '../clases/arbitre.php';
    $arbits = new Arbitre();
    $resultat = $arbits->fetch_All();

    if (!empty($_GET['id']) && !empty($_GET['del'])) {
        $id = $_GET['id'];
        $arbits->delete($id);
    }

    if (!empty($_POST['submit'])) {
        $id_persona = $_POST['id_persona'];
        $posicio = $_POST['posicio'];

        $arbits->insert([$id_persona,$posicio]);
    }
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mt-4 ">GESTOR BBDD</h2>
                    <hr>
                    <form method="POST"  action="<?php $_SERVER['PHP_SELF']; ?>" class="text-center">
                        <div class="row mt-3">
                            <div class="col-md-3 ">
                                <p>ID</p>
                            </div>
                            <div class="col-md-3">
                                <p>ID_PERSONA</p>
                            </div>
                            <div class="col-md-3">
                                <p>POSICIO</p>
                            </div>
                        </div>
                        <hr>
                        <?php foreach ($resultat as $arbit) { ?>
                            <div class="row mt-4 text-center">
                                <div class='col-md-3 '>
                                    <?= $arbit->id ?>
                                </div>
                                <div class='col-md-3'>
                                    <?= $arbit->id_persona ?>
                                </div>    
                                <div class='col-md-3'>
                                    <?= $arbit->posicio ?>
                                </div>    
                                <div class="col-md-2">
                                    <a href="../pagines/arbitreditar.php?id=<?= $arbit->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='edit' id='edit' value='Editar'></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="arbitrevista.php?del=1&&id=<?= $arbit->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='del' id='del' value='Borrar'></a>
                                </div>
                            </div>
                        <?php } ?>
                        <hr>
                        <div class="row mt-2 text-center">
                            <div class="col-md-auto offset-4">
                                <input type="text" class="form-control" name="id_persona" placeholder="ID PERSONA">
                            </div>
                            <div class="col-md-auto">
                                <input type="text" class="form-control" name="posicio" placeholder="POSICIO">                            
                            </div>
                            <div class="col-md-auto">
                                <input class="btn btn-danger btn-sm mt-1" type='submit' name='submit' id='submit' value='Insertar'>   
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