<?php

function table($number){
    $tabla = "<table border='2'>". pintarFilas($number).factorial($number) ."</table>";
    return $tabla;
}

function pintarFilas($number){
    $filas = '<tr>
                <th>Multiplo</th>
                <th>Resultado</th>
            </tr>';
    return multplicar($number, $filas);
}

function multplicar($number, $filas){

    for ($i=0; $i <= 10; $i++) { 
        $filas .= "<tr>".
                    "<td>". $number . 'x ' . $i . "</td>".
                    "<td>".($number*$i)."</td>".
                "</tr>";
    }
    return $filas;
}
        
function factorial($number){
    $filas = '<tr>
                <th>Factorial</th>
                <th>Resultado</th>
            </tr>';

    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $filas .= "<tr>".
                        "<td>". $i . '!'. "</td>".
                        "<td>".$factorial*$i."</td>".
                  "</tr>";
    }
    return $filas;
}

if (isset($_POST)) {
    $number = (int)$_POST['Numero'];
    echo table($number);
}
?>