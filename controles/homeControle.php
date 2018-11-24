<?php  

class homeControle extends Controle {

	public function index(){
		//teste:
		//$funcionario = new Funcionario();
		//$dados['dado'] = $funcionario->listar();
		/*
		variavel $dados e usada para mandar dados do banco
		para a essa pagina atual, se não esta usando fica so
		declarada. 
		*/
		$dados = array();
		$this->loadTemplate("home", $dados);
	}

	public function id($id){// trabalhar com busca por id na url. Ex: home/id/seuid
		echo "Meu nome é ".$id.".";
	}

}
?>