<?php
    echo "Ponga una lista de numeros: ";
    $lista = readline();

    function NumerosPares() {
        $numerosPares = array();
        foreach ($lista as $numero) {
            if ($numero % 2 == 0) {
                $numerosPares[] = $numero;
            }
        }
        return $numerosPares;
    }

    $numerosPares = NumerosPares($lista);

    echo "Los números pares en la lista son: " . implode(", ", $numerosPares);
?>