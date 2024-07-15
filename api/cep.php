<?php
error_reporting(0);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-type: application/json');

if(isset($_GET['cep'])){

    include('getApi1.php');

    echo json_encode($novo_result);

}
