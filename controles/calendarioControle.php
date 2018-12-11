<?php  

class calendarioControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("calendario", $dados);
	}
}
?>