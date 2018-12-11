<?php  

class homeControle extends Controle {

	public function index(){
		$dados = array();
		$this->loadTemplate("home", $dados);
	}

	public function id($id){// trabalhar com busca por id na url. Ex: home/id/seuid
		echo "Meu nome é ".$id.".";
	}

}
?>