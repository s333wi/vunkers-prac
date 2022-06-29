<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../connect.php';
require_once '../clases/interficie.php';
require_once '../clases/gestorBBDD.php';
require_once '../bootstrap.php';

class Partit extends connect implements interficie {

    public $gestor;

    public function __construct() {
        parent::__construct();
        $this->gestor = new gestorBBDD();
    }

    public function delete($id) {
        $sql = "DELETE FROM partits WHERE id=?";
        $this->gestor->delete($sql, $id);
        header("Location:../vistes/partitsvista.php");
    }

    public function fetch_All() {
        $sql = "SELECT * FROM partits";
        return $resultat = $this->gestor->fetch_All($sql);
    }

    public function get($id) {
        $sql = "SELECT * FROM partits WHERE id=?";
        return $resultat = $this->gestor->get($sql, $id);
    }

    public function insert($params) {
        $sql = "INSERT INTO partits (dia,hora,resultat,id_arbit,equip1,equip2) VALUES (?,?,?,?,?,?)";
        $this->gestor->insert($sql, $params);
        header("Location:partitsvista.php");
    }

    public function update($params) {
        $sql = "UPDATE partits SET dia=?,hora=?,resultat=?,id_arbit=?,equip1=?,equip2=? WHERE id=?";
        $this->gestor->update($sql, $params);
        header("Location:../vistes/partitsvista.php");
    }

}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

