<?php  

class recuperarControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("recuperar", $dados);
	}
}
?>