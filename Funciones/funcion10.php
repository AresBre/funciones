<?php
    function Primo($numero) {
        if ($numero <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        
        return true;
    }

    echo "Escriba un numero: ";
    $numero = readline();

    if (Primo($numero)) {
        echo "$numero es un numero primo.";
    } else {
        echo "$numero no es un numero primo.";
    }
?>
