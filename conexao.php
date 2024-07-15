<?php
setlocale(LC_ALL, 'ptb', 'portuguese-brazil', 'pt-br', 'bra', 'brazil');
date_default_timezone_set("Brazil/East");

ini_set( 'default_charset', 'utf-8' );

$bd_servidor = 'localhost'; 
$bd_usuario = 'root'; 
$bd_senha = '';
$banco = 'zoe'; 

$con = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $banco); 

// mysqli_query($con,"SET NAMES utf8");

