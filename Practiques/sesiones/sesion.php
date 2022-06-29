<?php
session_start();
$login = 'sewi';
$_SESSION['admin'] = $login;
 
if (isset($_SESSION['admin'])) {
    header('Location:index.php');
}
