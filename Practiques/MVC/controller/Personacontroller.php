<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'model/Persona_model.php';
$persones=new Persona_model();
$result=$persones->getPersones();
require_once 'view/personesview.php';
