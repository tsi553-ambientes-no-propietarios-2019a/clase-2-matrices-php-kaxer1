<?php 
/*
    $nombre = "Juan";

    echo "Hola $nombre<br>"; //escribe el nombre de la variable
    // "" --> interpreta el contenido
    echo 'Hola $nombre'; //escribe todo la cadena de caracteres

    $arr = array(
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3',
        'key4' => array('4.1','4.2'),
        'key5' => 5,
    );

    $arr1 = array(1,2,3,4);

    echo '<br>';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    echo '<br>';
    echo '<pre>';
    print_r($arr1);
    echo '</pre>';

    foreach ($arr as $key => $value){
        echo $key . ' ' ;
        print_r($value);
        echo '<br>';
    }
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
    
/*
    <table>
<tr>
  <td><strong>Curso</strong></td>
  <td><strong>Horas</strong></td>
  <td><strong>Horario</strong></td>
</tr> 
*/