<?php  

class contatoControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("contato", $dados);
	}
}
?>