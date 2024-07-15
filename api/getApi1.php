<?php

    $url_api1 = "http://viacep.com.br/ws/{cep}/json/";

    $cep = preg_replace('/[^0-9]/', '', $_GET['cep']);

	$response = file_get_contents( str_replace("{cep}", $cep, $url_api1) );
	$result = json_decode($response);

    $novo_result = array(
        'rua' => $result->logradouro,
        'bairro' => $result->bairro,
        'cidade' => $result->localidade,
        'uf' => $result->uf
    );
