<?php  

class deleteusuControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("deleteusu", $dados);
	}
}
?>