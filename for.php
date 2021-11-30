<?php

$arr = [0,3,5,1];

$qtd_elementos_array = count($arr); // 4 - 1 // 3

// $i =1
// $posicaoAtual = 0

for ($i=0; $i< $qtd_elementos_array -1; $i++) {
    for ($PosicaoAtual=0; $PosicaoAtual<$qtd_elementos_array -$i -1; $PosicaoAtual++) {

        $ProximaPosicao = $PosicaoAtual+1; // 3

        if ($arr[$ProximaPosicao] < $arr[$PosicaoAtual]) {

            $auxiliar = $arr[$PosicaoAtual]; // 5
            $arr[$PosicaoAtual] = $arr[$ProximaPosicao] ;
            $arr[$ProximaPosicao] = $auxiliar;
        }
    }
}
print_r($arr) . "\n";