<?php
/*
classe responsavel para cadastrar os laboratorios
*/

class Laboratorio extends Conexao{
	// Declaração dos atributos:
	private $nome;

	// Implementação dos GETs e SETs:
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}

	// Implementação das funções CRUD:
	public function cadastrar(){
		try{
			$sql = "INSERT INTO laboratorio (nome) VALUES(:nome)";
			$prep = Conexao::getInstance()->prepare($sql);
	 
	        $prep->bindValue(":nome", $this->getNome());
	 		$prep->execute();
	 		echo "".Utilidades::mensagemOK();
	 		exit();
        } catch (Exception $erro) {
        	echo "".Utilidades::mensagemErro("Erro técnico.");
	 		exit();
        }
	}

	public function listar(){
		try {
			$result = array();
			$sql = "SELECT * FROM laboratorio";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $result = $prep->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $erro) {
        }
	}

	// pega o nome do lab pelo codigo id
	public function getLab($id){
		try {
			$result = array();
			$sql = "SELECT nome FROM laboratorio WHERE id = $id";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $result = $prep->fetch(PDO::FETCH_ASSOC);
            return $result['nome'];
        } catch (Exception $erro) {
        }
	}
	
}

?>