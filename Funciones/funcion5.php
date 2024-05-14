<?php
    function invertir(){
        echo "ingrese una cadena de texto: ";
        $palabra = readline();

        $palabraInvertida = strrev($palabra);

        echo "de la palabra: $palabra" . "\n";
        echo "al revez es: $palabraInvertida";
    }

    invertir();
?>