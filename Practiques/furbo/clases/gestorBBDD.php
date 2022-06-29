<?php

require_once '../connect.php';

class gestorBBDD extends connect {

    public function __construct() {
        parent::__construct();
    }

    public function delete($sql, $id) {
        try {
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $delete=$this->pdo->prepare($sql);
            $delete->execute($id);
        } catch (Exception $e) {
            echo 'Exception -> ';
            var_dump($e->getMessage());
        }
    }

    public function fetch_All($sql) {
        $fetch = $this->pdo->prepare($sql);
        $fetch->execute();
        $resultat = $fetch->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
    }

    public function get($sql, $id) {
        $get = $this->pdo->prepare($sql);
        $get->execute([$id]);
        $resultat = $get->fetch(PDO::FETCH_OBJ);
        /* echo '<pre>';
          print_r($resultat);
          echo '<pre>'; */
        return $resultat;
    }

    public function insert($sql, $params) {
        try {
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $insert=$this->pdo->prepare($sql);
            $insert->execute($params);
        } catch (Exception $e) {
            echo 'Exception -> ';
            var_dump($e->getMessage());
        }
    }

    public function update($sql, $params) {
        try {
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $update=$this->pdo->prepare($sql);
            $update->execute($params);
        } catch (Exception $e) {
            echo 'Exception -> ';
            var_dump($e->getMessage());
        }
    }

}
