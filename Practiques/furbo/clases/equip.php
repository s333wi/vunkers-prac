<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../connect.php';
require_once '../clases/interficie.php';
require_once '../clases/gestorBBDD.php';
require_once '../bootstrap.php';

class Equip extends connect implements interficie {

    public $gestor;

    public function __construct() {
        parent::__construct();
        $this->gestor = new gestorBBDD();
    }

    public function delete($id) {
        $sql = "DELETE FROM equips WHERE id=?";
        $this->gestor->delete($sql, $id);
        header("Location:equipvista.php");
    }

    public function fetch_All() {
        $sql = "SELECT * FROM equips";
        return $resultat = $this->gestor->fetch_All($sql);
    }

    public function get($id) {
        $sql = "SELECT * FROM equips WHERE id=?";
        return $resultat = $this->gestor->get($sql, $id);
    }

    public function insert($params) {
        $sql = "INSERT INTO equips (nom,id_president) VALUES (?,?)";
        $this->gestor->insert($sql, $params);
        header("Location:equipvista.php");
    }

    public function update($params) {
        $sql = "UPDATE equips SET nom=?,id_president=? WHERE id=?";
        $this->gestor->update($sql, $params);
        header("Location:../vistes/equipvista.php");
    }

}
