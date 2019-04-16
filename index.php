<?php 
/*
    KEVIN CURAY
*/
    $arr2 = array(
        array('Nombre',
              'Apellido',
              'Edad'),
        array('Carlos',
              'Almeida',
              32),
        array('Juan',
              'Correa',
              21),
        array('Maria',
              'Martinez',
              22),
    );


    echo "<table border=\"3\">";

    foreach($arr2 as $value){
        echo "<tr>";
        foreach($value as $i){
            echo "<td>";
            print_r($i);
            echo "</td>";            
        }
        echo "</tr>";
    }
    echo "</table>";
    