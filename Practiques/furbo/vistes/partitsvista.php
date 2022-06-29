
<html>
    <head>
        <style>
            *{
                font:12px/16px Menlo,Consolas,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif;
            }
        </style>
    </head>
    <?php
    //Conseguir persones
    include_once '../clases/partit.php';
    $partits = new Partit();
    $resultat = $partits->fetch_All();
    if (!empty($_GET['id']) && !empty($_GET['del'])) {
        $id = $_GET['id'];
        $partits->delete([$id]);
    }

    if (!empty($_POST['submit'])) {
        print_r($_POST);
        $dia = $_POST["dia"];
        $hora = $_POST["hora"];
        $resultatpartit = $_POST["resultat"];
        $arbit = $_POST["id_arbit"];
        $equip1 = $_POST["equip1"];
        $equip2 = $_POST["equip2"];
        $partits->insert([$dia, $hora, $resultatpartit, $arbit, $equip1, $equip2]);
    }
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mt-4 mb-3 ">GESTOR BBDD</h2>
                    <hr>
                    <form method="POST"  action="<?php $_SERVER['PHP_SELF']; ?>" class="text-center">
                        <div class="row mt-3 text-center">
                            <div class="col-md-1 ">
                                <p>ID</p>
                            </div>
                            <div class="col-md-2">
                                <p>DIA</p>
                            </div>
                            <div class="col-md-1">
                                <p>HORA</p>
                            </div>
                            <div class="col-md-1">
                                <p>RESULTAT</p>
                            </div>
                            <div class="col-md-1">
                                <p>ID_ARBIT</p>
                            </div>
                            <div class="col-md-2">
                                <p>EQUIP 1</p>
                            </div>
                            <div class="col-md-2">
                                <p>EQUIP 2</p>
                            </div>
                        </div>
                        <hr>
                        <?php foreach ($resultat as $partit) { ?>
                            <div class="row mt-4 text-center">
                                <div class='col-md-1 '>
                                    <?= $partit->id ?>
                                </div>
                                <div class='col-md-2'>
                                    <?= $partit->dia ?>
                                </div>    
                                <div class='col-md-1'>
                                    <?= $partit->hora ?>
                                </div>    
                                <div class='col-md-1'>
                                    <?= $partit->resultat ?>
                                </div>    
                                <div class='col-md-1'>
                                    <?= $partit->id_arbit ?>
                                </div>    
                                <div class='col-md-2'>
                                    <?= $partit->equip1 ?>
                                </div>    
                                <div class='col-md-2'>
                                    <?= $partit->equip2 ?>
                                </div>    
                                <div class="col-md-1">
                                    <a href="../pagines/partiteditar.php?id=<?= $partit->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='edit' id='edit' value='Editar'></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="partitsvista.php?del=1&&id=<?= $partit->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='del' id='del' value='Borrar'></a>
                                </div>
                            </div>
                        <?php } ?>
                        <hr>
                        <div class="row mt-2 text-center">
                            <div class="col-md-1 offset-1">
                                <input type="text" class="form-control" name="dia" placeholder="DIA">
                            </div>
                            <div class="col-md-1">
                                <input type="text" class="form-control" name="hora" placeholder="HORA">                            
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="resultat" placeholder="RESULTAT">                            
                            </div>
                            <div class="col-md-1">
                                <input type="text" class="form-control" name="id_arbit" placeholder="ARBIT">                            
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="equip1" placeholder="EQUIP 1">                            
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="equip2" placeholder="EQUIP 2">                            
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