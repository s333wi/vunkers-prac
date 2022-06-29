<?php

class retornoDatos {

    //string
    public function returnString($edad) {
        if ($edad >= 18) {
            return "Es mayor de edad";
        } else {
            return "No es mayor de edad";
        }
    }

    //int
    public function returnInt($param) {
        if ($param > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    //array
    public function returnArray($param) {
        $datos = array();

        for ($i = 0; $i < $param; $i++)
            $datos[$i] = $i;

        return $datos;
    }

    //json
    function returnJSON() {
        $arr=array(
            "hdd" =>500,
            "pantalla" => 21,
            "ram" => 16
        );
        
        return json_encode($arr);
    }
}

$cadena = new retornoDatos();
var_dump($cadena->returnString(20));
echo '<br>';
var_dump($cadena->returnInt(1));
echo '<br>';
var_dump($cadena->returnArray(10));
echo '<br>';
var_dump($cadena->returnJSON());
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

