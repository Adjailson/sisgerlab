<?php  

class coorconfigControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("coorconfig", $dados);
	}
}
?>