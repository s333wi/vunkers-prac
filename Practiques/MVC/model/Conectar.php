<?php
class Conectar {

    public static function conexion() {
        try {
            $link = 'mysql:host=localhost;dbname=esuceveanu';
            $usuari = 'esuceveanu';
            $password = 'LEs]QYxBmN0SSoHp';
            $pdo = new PDO($link, $usuari, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET UTF8");
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $pdo;
    }
}
