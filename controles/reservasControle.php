<?php  

class reservasControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("reservas", $dados);
	}
}
?>