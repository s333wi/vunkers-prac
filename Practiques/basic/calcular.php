<?php
//Aixo per si no rebem cap informacio
if(isset($_POST)){
    header('Location:index.html');
}
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$pago = $_POST['formaPago'];
$subtotal = $precio * $cantidad;

//Forma de pago evaluacio
if ($pago == 'Tarjeta') {
    $descuento = $subtotal * 0.2;
} else if ($pago == 'Efectivo') {
    $descuento = $subtotal * 0.1;
}
$total = $subtotal - $descuento;
?>

<!doctype html>
<html>
    <head>
    </head>
    <body>
        <h1>Total a pagar: <?php echo $total; ?></h1>
        <p>Producto: <?php echo $producto; ?></p>
        <p>Precio: <?php echo $precio; ?></p>
        <p>Cantidad: <?php echo $cantidad; ?></p>
        <p>Forma de pago: <?php echo $pago;?></p>
        <p>Subtotal: <?php echo $subtotal; ?></p>
        <p>Descuento: <?php echo $descuento; ?></p>
    </body>
</html>
