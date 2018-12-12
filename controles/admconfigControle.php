<?php  

class admconfigControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("admconfig", $dados);
	}

}
?>