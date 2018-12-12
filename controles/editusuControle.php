<?php  

class editusuControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("editusu", $dados);
	}

}
?>