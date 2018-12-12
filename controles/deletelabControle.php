<?php  

class deletelabControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("deletelab", $dados);
	}
}
?>