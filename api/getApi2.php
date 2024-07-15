<?php

    $url_api2 = "https://cdn.apicep.com/file/apicep/{cep}.json";

    $cep = substr(preg_replace('/[^0-9]/', '', $_GET['cep']), 0, 5);
    $cep = $cep . "-" . substr($_GET['cep'], 5, 8);

	$response = file_get_contents( str_replace("{cep}", $cep, $url_api2) );
	$result = json_decode($response);

    $novo_result = array(
        'rua' => $result->address,
        'bairro' => $result->district,
        'cidade' => $result->city,
        'uf' => $result->state
    );
