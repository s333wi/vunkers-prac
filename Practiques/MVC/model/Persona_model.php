<?php

class Persona_model {

    private $db;
    private $persones;

    public function __construct() {
        require_once 'model/Conectar.php';

        $this->db = Conectar::conexion();
        $this->persones = [];
    }

    public function getPersones() {
        $sql = "SELECT * FROM persones";
        $get = $this->db->prepare($sql);
        $get->execute();
        while ($row = $get->fetch(PDO::FETCH_ASSOC)) {
            $this->persones[] = $row;
        }
        return $this->persones;
    }

}
