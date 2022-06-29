<?php

class clasePadre {

    public function metodoPadre() {
        return "ola padre";
    }

    public function metodo1() {
        return "metodo padre";
    }
}

class claseHijo extends clasePadre{
    public function metodoHijo() {
        return parent::metodo1();
    }
    
    public function metodo1() {
        return "metodo hijo";
    }
}

echo claseHijo::metodoHijo();

