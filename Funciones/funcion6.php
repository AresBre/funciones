<?php
    function factorial() {
        echo "Escriba un número mayor a cero: ";
        $num = readline();

        if ($num >= 0) {
            $factorial = 1;
            for ($i = 1; $i <= $num; $i++) {
                $factorial *= $i;
            }
            echo "El factorial de $num es: $factorial";
        } else {
            echo "Valor no permitido";
        }
    }

    factorial();
?>