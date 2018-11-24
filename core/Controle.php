<?php

class Controle {

	public function loadView($nomePagina, $dadosPagina = array()){
		extract($dadosPagina);
		include 'visoes/'.$nomePagina.'.php';
	}

	public function loadTemplate($nomePagina, $dadosPagina = array()){
		include 'visoes/template.php';
	}

	public function loadViewInTemplate($nomePagina, $dadosPagina = array()){
		extract($dadosPagina);
		include 'visoes/'.$nomePagina.'.php';
	}
}

?>