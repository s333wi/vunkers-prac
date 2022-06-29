<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../bootstrap.php';
require_once '../connect.php';
require_once '../clases/interficie.php';
require_once '../clases/gestorBBDD.php';
class Futbolista extends connect implements interficie{
    public $gestor;
    
    public function __construct() {
        parent::__construct();
        $this->gestor=new gestorBBDD();
    }
    public function delete($id) {
        $sql="DELETE FROM futbolistes WHERE id=?";
        $this->gestor->delete($sql, $id);
        header("Location:futbolistavista.php");
    }

    public function fetch_All() {
        $sql="SELECT * FROM futbolistes";
        $resultat=$this->gestor->fetch_All($sql);
        return $resultat;
    }

    public function get($id) {
        $sql="SELECT * FROM futbolistes WHERE id=?";
        $resultat=$this->gestor->get($sql,$id);
        return $resultat;
    }

    public function insert($params) {
        $sql="INSERT INTO futbolistes (id_persona,posicio,dorsal,id_equip) VALUES (?,?,?,?)";
        $this->gestor->insert($sql, $params);
        header("Location:futbolistavista.php");
    }

    public function update($params) {
        $sql="UPDATE futbolistes SET id_persona=?,posicio=?,dorsal=?,id_equip=? WHERE id=?";
        $this->gestor->update($sql, $params);
        header("Location:../vistes/futbolistavista.php");
    }

}