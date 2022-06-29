<?php
include './connect.php';
;
//$conexion=$pdo->query("SELECT * FROM persones");
//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
$registros = $pdo->query("SELECT * FROM persones")->fetchAll(PDO::FETCH_OBJ);

if (!empty($_POST['cr'])) {
    $nom=$_POST['nom'];
    $dni=$_POST['dni'];
    $email=$_POST['email'];
    $edat=$_POST['edat'];
    
    $sql='INSERT INTO persones (dni,nom,email,edat) VALUES (?,?,?,?)';
    $insert=$pdo->prepare($sql);   
    $insert->execute(array($dni,$nom,$email,$edat));
    
    header('Location:index.php');
    $pdo=null;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="hoja.css">


    </head>

    <body>


        <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
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

                <?php foreach ($registros as $persona){ ?>
                    <tr>
                        <td><?= $persona->id ?></td>
                        <td><?= $persona->dni ?></td>
                        <td><?= $persona->nom ?></td>
                        <td><?= $persona->email ?></td>
                        <td><?= $persona->edat ?></td>


                        <td class="bot"><a href="borrar.php?id=<?= $persona->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
                        <td class='bot'><a href="editar.php?id=<?= $persona->id ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
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
        </form>
        <p>&nbsp;</p>
    </body>
</html>