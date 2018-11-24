<?php  
require 'config.php';// vamos usar para conectar ao banco em todas as paginas

//define("BASE_URL", "https://sisgerlab.tk/"); ativa somente quando estive no servido real
define("BASE_URL", "http://localhost/sisgerlab/");

spl_autoload_register(function ($class){
	if(strpos($class, 'Controle') > -1){
		if(file_exists('controles/'.$class.'.php')){
			require_once 'controles/'.$class.'.php';
		}
	}else if(file_exists('modelos/'.$class.'.php')){
		require_once 'modelos/'.$class.'.php';
	}else{
		require_once 'core/'.$class.'.php';
	}
});

$core = new core();
$core->carregar();

?>