<?php

class claseCalculo {

    public function calcularDatos($val1, $val2, $opcion) {
        switch ($opcion) {
            case 'Sumar':
                return $val1+$val2;
                break;
            case 'Restar':
                return $val1-$val2;
                break;
            case 'Dividir':
                return $val1/$val2;
                break;
            case 'Multiplicar':
                return $val1*$val2;
                break;
            default:
                break;
        }
    }

}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

