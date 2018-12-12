<?php  

class homeControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("home", $dados);
	}
}
?>