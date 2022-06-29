<html>
    <?php
    require_once './bootstrap.php';
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mt-4 ">GESTOR BBDD</h2>
                    <hr>
                    <form method="get"  class="text-center">
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <a class="col-md-6 btn btn-primary btn-block mt-3" href="./vistes/personavista.php">Persona</a>
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <a class="col-md-6 btn btn-primary btn-block mt-3" href="./vistes/arbitrevista.php">Arbitre</a>
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <a class="col-md-6 btn btn-primary btn-block mt-3" href="./vistes/futbolistavista.php">Futbolistes</a>
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <a class="col-md-6 btn btn-primary btn-block mt-3" href="./vistes/equipvista.php">Equips</a>
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <a class="col-md-6 btn btn-primary btn-block mt-3" href="./vistes/partitsvista.php">Partits</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

