<?php  

class editeusuControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("editeusu", $dados);
	}

}
?>