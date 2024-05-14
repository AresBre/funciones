<?php
    function esPalindromo($cadena) {
        $cadena = strtolower($cadena);
        $cadena = preg_replace("/[^a-zA-Z0-9]/", "", $cadena);
        
        $cadenaInvertida = strrev($cadena);
        
        return $cadena == $cadenaInvertida;
    }

    echo "Ingrese una cadena para comprobar si es un palíndromo: ";
    $cadena = readline();

    if (esPalindromo($cadena)) {
        echo "\"$cadena\" es un palíndromo.";
    } else {
        echo "\"$cadena\" no es un palíndromo.";
    }
?>