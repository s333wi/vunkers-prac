
<html>
    <?php
    //Conseguir persones
    include_once '../clases/equip.php';
    $equips = new Equip();
    $resultat = $equips->fetch_All();
    if (!empty($_GET['id']) && !empty($_GET['del'])) {
        $id = $_GET['id'];
        
        $equips->delete([$id]);
    }

    if (!empty($_POST['submit'])) {
        print_r($_POST);
        $nom = $_POST['nom'];
        $id_president = $_POST['id_president'];
        $equips->insert([$nom,$id_president]);
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
                                <p>NOM</p>
                            </div>
                            <div class="col-md-3">
                                <p>ID_PRESIDENT</p>
                            </div>
                        </div>
                        <hr>
                        <?php foreach ($resultat as $equip) { ?>
                            <div class="row mt-4 text-center">
                                <div class='col-md-3 '>
                                    <?= $equip->id ?>
                                </div>
                                <div class='col-md-3'>
                                    <?= $equip->nom ?>
                                </div>    
                                <div class='col-md-3'>
                                    <?= $equip->id_president?>
                                </div>    
                                <div class="col-md-2">
                                    <a href="../pagines/equipeditar.php?id=<?= $equip->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='edit' id='edit' value='Editar'></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="equipvista.php?del=1&&id=<?= $equip->id ?>"><input class= "btn btn-warning btn-block btn-sm mb-1"type='button' name='del' id='del' value='Borrar'></a>
                                </div>
                            </div>
                        <?php } ?>
                        <hr>
                        <div class="row mt-2 text-center">
                            <div class="col-md-auto offset-4">
                                <input type="text" class="form-control" name="nom" placeholder="NOM">
                            </div>
                            <div class="col-md-auto">
                                <input type="text" class="form-control" name="id_president" placeholder="ID_PRESIDENT">                            
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