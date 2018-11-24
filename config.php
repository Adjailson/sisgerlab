<?php
require 'environment.php';

global $config;
$config = array();
if(VAR_GLOBAL == "desenvolvedor"){
	// Dados do meu servidor local:
	$config['dbname'] = 'tecjr';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '1234';
}else{
	// Dados do servidor externo:
	$config['dbname'] = 'u850975184_sisgerlab';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'u850975184_sisgerlab';
	$config['dbpass'] = 'sisgerlab';
}

?>