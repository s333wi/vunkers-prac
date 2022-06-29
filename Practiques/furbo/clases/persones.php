<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once '../bootstrap.php';
require_once '../clases/interficie.php';
require_once '../connect.php';
require '../clases/gestorBBDD.php';

class persones extends connect implements interficie {
        
    public $gestor;

    public function __construct() {
        parent::__construct();
        $this->gestor=new gestorBBDD();
    }

    public function insert($params) {
        $sql = 'INSERT INTO persones (dni,nom,email,edat) VALUES (?,?,?,?)';
        $this->gestor->insert($sql, $params);
        header("Location:personavista.php");
    }

    public function delete($id) {
        $sql = "DELETE FROM persones WHERE id=?";
        $this->gestor->delete($sql, [$id]);
        header("Location:personavista.php");
    }

    public function fetch_All() {
        $sql = "SELECT * FROM persones";
        $resultat = $this->gestor->fetch_All($sql);
        return $resultat;
    }

    public function get($id) {
        $gestor = new gestorBBDD();
        $sql = "SELECT * FROM persones WHERE id=?";
        return $resultat = $this->gestor->get($sql, $id);
    }

    public function update($params) {
        $sql = 'UPDATE persones SET nom=?, dni=?, email=?,edat=? WHERE id=?';
        $this->gestor->update($sql, $params);
    }

}
?>
