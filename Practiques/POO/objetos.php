<?php

class objetos {

    public $resultado = 0;

    public function miMetodo($v1, $v2) {

        return $this->resultado = $v1 + $v2;
    }

}

$miObjeto = new objetos();
echo $miObjeto->miMetodo(3, 4);
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

