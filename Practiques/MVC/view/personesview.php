<html>
    <head>
        <title>Persones</title>
        <?php include_once '../furbo/bootstrap.php';
        ?>
        <link rel="stylesheet" type="text/css" href="hoja.css">
    </head>
    <body>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="text-center">
            <div class="row mt-3  ">
                <div class="col mx-auto">
                    <table width="50%" border="0" align="center">
                        <tr >
                            <td class="primera_fila">Id</td>
                            <td class="primera_fila">DNI</td>
                            <td class="primera_fila">Nom</td>
                            <td class="primera_fila">Email</td>
                            <td class="primera_fila">Edat</td>
                            <td class="sin">&nbsp;</td>
                            <td class="sin">&nbsp;</td>
                            <td class="sin">&nbsp;</td>
                            <td class="sin">&nbsp;</td>
                        </tr> 

                        <?php foreach ($result as $persona) { ?>
                            <tr>
                                <td><?= $persona['id'] ?></td>
                                <td><?= $persona['dni'] ?></td>
                                <td><?= $persona['nom'] ?></td>
                                <td><?= $persona['email'] ?></td>
                                <td><?= $persona['edat'] ?></td>


                                <td class="bot"><a href="borrar.php?id=<?= $persona['id'] ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
                                <td class='bot'><a href="editar.php?id=<?= $persona['id'] ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
                            </tr> 
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td><input type='text' name='dni' size='10' class='centrado'></td>
                            <td><input type='text' name='nom' size='10' class='centrado'></td>
                            <td><input type='text' name='email' size='10' class='centrado'></td>
                            <td><input type='text' name='edat' size='10' class='centrado'></td>
                            <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
                    </table>
                </div>
            </div>
        </form>
    </body>
</html>
