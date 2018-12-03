<?php  

class sobreControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("sobre", $dados);
	}
}
?>