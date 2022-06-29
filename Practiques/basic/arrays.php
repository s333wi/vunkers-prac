<?php
    $frutas = array("platano","manzana","webo","fresa");
    print_r($frutas);
    
    echo $frutas[1];
    echo "</br>";
    
    echo count($frutas). ' elementos</br>';
    for($i=0;$i < count($frutas); $i++){
        echo $frutas[$i];
        echo "</br>";
    }
    
    $edades=array("Marcos" => 34, "Ionela" => 21, "Omar" => 27);
    print_r($edades);
    echo "</br>";
    echo$edades["Ionela"].'</br>'; 
    
    foreach($edades as $key => $value){
        echo$key.' tiene el valor de '.$value. ' </br>';
    }
    
    //Arrays indexats i associatius
    $arrayi = array('elemento 1','elemento 2');
    
    foreach ($arrayi as $key => $value) {
        echo 'indice: '.$key.' valor: '.$value.'</br>';
}
    