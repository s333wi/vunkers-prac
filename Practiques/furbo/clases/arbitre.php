<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../bootstrap.php';
require_once '../connect.php';
require_once '../clases/interficie.php';
require_once '../clases/gestorBBDD.php';

class Arbitre extends connect implements interficie {

    public $gestor;

    function __construct() {
        parent::__construct();
        $this->gestor = new gestorBBDD();
    }

    public function delete($id) {
        $sql = $this->pdo->prepare("DELETE FROM Arbits WHERE id=?");
        $sql->execute(array($id));
        $sql = null;
        header("Location:arbitrevista.php");
    }

    public function fetch_All() {
        $sql = "SELECT * FROM Arbits";
        $resultat = $this->gestor->fetch_All($sql);
        return $resultat;
    }

    public function insert($params) {
        $sql = "INSERT INTO Arbits (id_persona,posicio) VALUES (?,?)";
        $this->gestor->insert($sql, $params);
        header('Location:arbitrevista.php');
    }

    public function update($params) {
        $sql = "UPDATE Arbits SET id_persona=?,posicio=? WHERE id=?";
        $this->gestor->insert($sql, $params);
        header('Location:../vistes/arbitrevista.php');
    }

    public function get($id) {
        $sql = "SELECT * FROM Arbits WHERE id=?";
        $resultat = $this->gestor->get($sql, $id);
        return $resultat;
    }

}
?>


