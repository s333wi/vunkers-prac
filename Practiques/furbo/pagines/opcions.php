<html>
    <?php
    include '../connect.php';
    include '../clases/persones.php';
    include '../bootstrap.php';
    $class=$_GET['class'];
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mt-4 ">GESTOR BBDD</h2>
                    <hr>
                    <form method="post"  class="text-center">
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <input type="text" value="<?= $arraypersones['dni']?>">
                            <input type="submit" name="submit" class="col-md-6 btn btn-primary btn-block mt-3" value="Insert>">
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <input type="submit" name="submit" class="col-md-6 btn btn-primary btn-block mt-3" value="Get1">
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <input type="submit" name="submit" class="col-md-6 btn btn-primary btn-block mt-3" value="FetchAll">
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <input type="submit" name="submit" class="col-md-6 btn btn-primary btn-block mt-3" value="Update">
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <input type="submit" name="submit" class="col-md-6 btn btn-primary btn-block mt-3" value="Delete">
                        </div>
                        <div class="form-group col-md-6 mx-auto mt-2">
                            <a class="col-md-6 btn btn-primary btn-block mt-3" href="../inici.php">Torna inici</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

