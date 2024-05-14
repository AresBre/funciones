<?php
    function numeros(){
        echo "ponga el primer numero: ";
        $num1 = readline();
        echo "ponga el sugundo numero: ";
        $num2 = readline();
        echo "ponga el tercer numero: ";
        $num3 = readline();

        if($num1 > $num2 && $num1 > $num3){
            echo "El numero mayor es: $num1";
        } else if($num2 > $num1 && $num2 > $num3){
            echo "El numero mayor es: $num2";
        } else{
            echo "El numero mayor es: $num3";
        }
    }

    numeros()
?>