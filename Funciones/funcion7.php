<?php
    function limitador(){
        echo "ponga el limite de rango de inicio: ";
        $inicio = readline();
        echo "ponga el limite de rango de final: ";
        $final = readline();
        echo "ponnga un numero: ";
        $num = readline();

        if($num >= $inicio && $num <= $final){
            echo "El numero $num esta dentro del limite de $inicio y $final";
        } else{
            echo "El numero $num esta fuera del limite de $inicio y $final";
        }
    }

    limitador();
?>