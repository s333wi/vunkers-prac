<?php

class selfMetod {

    public function mandarColor($param) {
        if ($param == 1) {
            return "rojo";
        } elseif ($param == 2) {
            return "negro";
        } elseif ($param == 3) {
            return "azul";
        }
    }

    public function darDeAltaColor($tipocolor) {
        return self::mandarColor($tipocolor);
    }

}

$obj = new selfMetod();
echo $obj->darDeAltaColor(2);
