<?php  

class sairControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("sair", $dados);
	}
}
?>