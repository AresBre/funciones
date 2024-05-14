<?php
    function MayusculasMinusculas() {
        echo "Ingrese una cadena: ";
        $cadena = readline();
        $numMayusculas = 0;
        $numMinusculas = 0;

        for ($i = 0; $i < strlen($cadena); $i++) {
            if (ctype_upper($cadena[$i])) {
                $numMayusculas++;
            } else if (ctype_lower($cadena[$i])) {
                $numMinusculas++;
            }
        }

        echo "Numero de letras mayusculas: " . $numMayusculas;
        echo "Numero de letras minusculas: " . $numMinusculas;
    }

    contarLetrasMayusculasYMinusculas();
?>