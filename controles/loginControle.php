<?php  

class loginControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("login", $dados);
	}
}
?>