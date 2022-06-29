<?php
include './connect.php';
if (empty($_POST['bot_actualizar'])) {
    $id = $_GET['id'];
    $sql_editar = 'SELECT * FROM persones WHERE id=?';
    $sent_editar = $pdo->prepare($sql_editar);
    $sent_editar->execute(array($id));
    $resultat = $sent_editar->fetch(PDO::FETCH_OBJ);
    echo '<pre>';
    print_r($resultat);
    echo '<pre>';
} else {
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $dni=$_POST['dni'];
    $edat=$_POST['edat'];
    
    $sql='UPDATE persones SET nom=?, dni=?, email=?,edat=? WHERE id=?';
    $update=$pdo->prepare($sql);
    $update->execute(array($nom,$dni,$email,$edat,$id));
    header('Location:index.php');
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <link rel="stylesheet" type="text/css" href="hoja.css">
    </head>

    <body>

        <h1>ACTUALIZAR</h1>

        <p>

        </p>
        <p>&nbsp;</p>
        <form name="form1" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
            <table width="25%" border="0" align="center">
                <tr>
                    <td></td>
                    <td><label for="id"></label>
                        <input type="hidden" name="id" id="id" value="<?= $resultat->id ?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><label for="nom"></label>
                        <input type="text" name="nom" id="nom" value="<?= $resultat->nom ?>"></td>
                </tr>
                <tr>
                    <td>DNI</td>
                    <td><label for="ape"></label>
                        <input type="text" name="dni" id="dni" value="<?= $resultat->dni ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><label for="dir"></label>
                        <input type="text" name="email" id="email" value="<?= $resultat->email ?>"></td>
                </tr>
                <tr>
                    <td>Edat</td>
                    <td><label for="dir"></label>
                        <input type="text" name="edat" id="edat" value="<?= $resultat->edat ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
                </tr>
            </table>
        </form>
        <p>&nbsp;</p>
    </body>
</html>