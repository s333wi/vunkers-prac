<?php

include './connect.php';
$id=$_GET['id'];
$delete=$pdo->prepare("DELETE FROM persones WHERE id=?");
$delete->execute(array($id));
header("Location:index.php");