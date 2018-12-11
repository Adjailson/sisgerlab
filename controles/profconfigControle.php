<?php  

class profconfigControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("profconfig", $dados);
	}
}
?>