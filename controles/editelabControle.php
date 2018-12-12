<?php  

class editelabControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("editelab", $dados);
	}
}
?>