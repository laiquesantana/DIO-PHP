<?php

$carros = ['Ferrari','Bmw', 'Mercedes'];

$EnderecoPessoas = [
    'pessoa1' => array(
        "cep" => "12312321",
        "cidade1" => "Salvador"
    ),
    'pessoa2'=>[
        'cep' => "12321321",
        "cidade" => "São Paulo"
    ] ,
];

if(isset($EnderecoPessoas['pessoa1']['cidade1'])){
    print_r($EnderecoPessoas['pessoa1']['cidade1']);
}else{
    echo "Chave inválida !";
}
