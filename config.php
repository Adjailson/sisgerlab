<?php
require 'environment.php';

global $dados_db;
$dados_db = array();
if(ACESSO_DB == "desenvolvedor"){
	// Dados do meu servidor local:
	$dados_db['dbnome'] = 'sisgerlab';
	$dados_db['dbhost'] = 'localhost';
	$dados_db['dbuser'] = 'root';
	$dados_db['dbsenha'] = '1234';
}else{
	// Dados do servidor externo:
	$dados_db['dbnome'] = 'u850975184_sisgerlab';
	$dados_db['dbhost'] = 'localhost';
	$dados_db['dbuser'] = 'u850975184_sisgerlab';
	$dados_db['dbsenha'] = 'sisgerlab';
}

?>