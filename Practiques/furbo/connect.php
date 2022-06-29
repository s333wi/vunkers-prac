<?php

class connect {

    public $pdo;

    public function __construct() {
        try {
            $link = 'mysql:host=localhost;dbname=esuceveanu';
            $usuari = 'esuceveanu';
            $password = 'LEs]QYxBmN0SSoHp';
            $this->pdo = new PDO($link, $usuari, $password);
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
