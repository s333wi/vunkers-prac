
<html>
    <?php
    //Conseguir persones
    include_once '../clases/futbolistes.php';
    $futbolistes= new Futbolista();
    $resultat = $futbolistes->fetch_All();
  
    if (!empty($_GET['id']) && !empty($_GET['del'])) {
        $id = $_GET['id'];
        $futbolistes->delete([$id]);
    }

    if (!empty($_POST['submit'])) {
        $id_persona = $_POST['id_persona'];
        $posicio = $_POST['posicio'];
        $dorsal = $_POST['dorsal'];
        $id_equip = $_POST['id_equip'];
        
        $futbolistes->insert([$id_persona,$posicio,$dorsal,$id_equip]);
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
                            <div class="col-md-2 ">
                                <p>ID</p>
                            </div>
                            <div class="col-md-2">
                                <p>ID_PERSONA</p>
                            </div>
                            <div class="col-md-2">
                                <p>POSICIO</p>
                            </div>
                            <div class="col-md-2">
                                <p>DORSAL</p>
                            </div>
                            <div class="col-md-2">
                                <p>ID_EQUIP</p>
                            </div>
                        </div>
                        <hr>
                        <?php foreach ($resultat as $futbolista) { ?>
                            <div class="row mt-4 text-center">
                                <div class='col-md-2 '>
                                    <?= $futbolista->id ?>
                                </div>
                                <div class='col-md-2'>
                                    <?= $futbolista->id_persona ?>
                                </div>    
                                <div class='col-md-2'>
                                    <?= $futbolista->posicio ?>
                                </div>    
                                <div class='col-md-2'>
                                    <?= $futbolista->dorsal ?>
                                </div>    
                                <div class='col-md-2'>
                                    <?= $futbolista->id_equip ?>
                                </div>    
                                <div class="col-md-1">
                                    <a href="../pagines/futbolistaeditar.php?id=<?= $futbolista->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='edit' id='edit' value='Editar'></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="futbolistavista.php?del=1&&id=<?= $futbolista->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='del' id='del' value='Borrar'></a>
                                </div>
                            </div>
                        <?php } ?>
                        <hr>
                        <div class="row mt-2 text-center">
                            <div class="col-md-auto offset-1">
                                <input type="text" class="form-control" name="id_persona" placeholder="ID PERSONA">
                            </div>
                            <div class="col-md-auto">
                                <input type="text" class="form-control" name="posicio" placeholder="POSICIO">                            
                            </div>
                            <div class="col-md-auto">
                                <input type="text" class="form-control" name="dorsal" placeholder="DORSAL">                            
                            </div>
                            <div class="col-md-auto">
                                <input type="text" class="form-control" name="id_equip" placeholder="ID_EQUIP">                            
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