<?php
    function elementosUnicos($array) {
        $arrayUnicos = array_unique($array);
        
        return array_values($arrayUnicos);
    }

    echo "Ingrese una lista de números separados por espacios: ";

    $entrada = trim(fgets(STDIN));

    $listaOriginal = explode(" ", $entrada);

    $listaOriginal = array_map('intval', $listaOriginal);

    $listaSinDuplicados = elementosUnicos($listaOriginal);

    echo "Lista sin duplicados: " . implode(" ", $listaSinDuplicados);
?>