<?php

$arr = [1,2,3,4,5,6,7,8,9,10];

$qtd_elementos_array = count($arr); 

foreach ($arr as $indice => $value) {

    if ($value % 2 == 0){
        continue;
    }
    echo "valor do índice : ". $indice . " valor : " . $value . "\n";
}
