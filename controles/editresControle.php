<?php  

class editresControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("editres", $dados);
	}
}
?>