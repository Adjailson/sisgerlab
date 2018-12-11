<?php
/*
classe responsavel para cadastrar os tipos de funções de cada funcionario
funções essas que podem ser responsavel para dá prioridade a cada usuário
do sistema.
*/

class Funcao extends Conexao{
	// Declaração dos atributos:
	private $funcao;

	// Implementação dos GETs e SETs:
	public function setFuncao($funcao){
		$this->funcao = $funcao;
	}
	public function getFuncao(){
		return $this->funcao;
	}

	// Implementação das funções CRUD:
	public function cadastrar(){
		try{
			$sql = "INSERT INTO funcao(funcao) VALUES(:funcao)";
			$prep = Conexao::getInstance()->prepare($sql);
	 
	        $prep->bindValue(":funcao", $this->getFuncao());
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
			$sql = "SELECT * FROM funcao";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $result = $prep->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $erro) {
        }
	}

	public function getFun($id){
		try {
			$dados = array();
			$sql = "SELECT * FROM funcao WHERE id=$id";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $dados = $prep->fetch(PDO::FETCH_ASSOC);
            return $dados['funcao'];
        } catch (Exception $erro) {
        }
	}
	
}

?>
