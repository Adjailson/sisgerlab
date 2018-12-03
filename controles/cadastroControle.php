<?php  

class cadastroControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("cadastro", $dados);
	}
}
?>