<?php  

class editeresControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("editeres", $dados);
	}
}
?>