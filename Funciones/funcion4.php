<?php
    function sumar(){
        echo "ingrese el primer numero: ";
        $n1 = readline();
        echo "ingrese un segundo numero: ";
        $n2 = readline();
        echo "ingrese un tercer numero: ";
        $n3 = readline();
        echo "ingrese un cuarto numero: ";
        $n4 = readline();
        echo "ingrese un quinto numero: ";
        $n5 = readline();

        $resultado = $n1 * $n2 * $n3 * $n4 * $n5;

        echo "El resultado de los numeros multiplicados es: $resultado";
    }

    sumar();
?>