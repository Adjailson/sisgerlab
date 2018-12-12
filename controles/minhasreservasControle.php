<?php  

class minhasreservasControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("minhasreservas", $dados);
	}
}
?>