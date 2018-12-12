<?php
/*
classe responsavel para cadastrar diversos usuarios no sistema como:
administrador, coordenador e professor.
*/
class Usuario extends Conexao{
	// Declaração dos atributos:
	private $cpf;
	private $nome;
	private $email;
	private $senha;
	private $funcao;
	private $situacao;

	// Implementação dos GETs e SETs:
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function getCpf(){
		return $this->cpf;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function setFuncao($funcao){
		$this->funcao = $funcao;
	}
	public function getFuncao(){
		return $this->funcao;
	}
	public function setSituacao($situacao){
		$this->situacao = $situacao;
	}
	public function getSituacao(){
		return $this->situacao;
	}

	// Implementação das funções CRUD:
	public function cadastrar(){
		try{
			$sql = "INSERT INTO usuario(cpf,nome,email,senha,funcao,situacao) VALUES(:cpf,:nome,:email,:senha,:funcao,:situacao)";
			$prep = Conexao::getInstance()->prepare($sql);
	 
	        $prep->bindValue(":cpf", $this->getCpf());
	        $prep->bindValue(":nome", $this->getNome());
	        $prep->bindValue(":email", $this->getEmail());
	        $prep->bindValue(":senha", $this->getSenha());
	        $prep->bindValue(":funcao", $this->getFuncao());
	        $prep->bindValue(":situacao", $this->getSituacao());
	 		$prep->execute();
	 		echo "".Utilidades::mensagemOK();
	 		exit();
        } catch (Exception $erro) {
        	echo "".Utilidades::mensagemErro("Erro técnico.");
	 		exit();
        }
	}

	public function editar($id) {
        try {
            $sql = "UPDATE usuario set nome = :nome, email = :email, funcao =:funcao, situacao = :situacao WHERE id = :id";
 
            $prep = Conexao::getInstance()->prepare($sql);
 
            $prep->bindValue(":nome", $this->getNome());
            $prep->bindValue(":email", $this->getEmail());
            $prep->bindValue(":funcao", $this->getFuncao());
            $prep->bindValue(":situacao", $this->getSituacao());
            $prep->bindValue(":id", $id);
            $prep->execute();
            
        } catch (Exception $erro) {
        	echo "".Utilidades::mensagemErro("Erro técnico.");
	 		exit();
        }
    }

	public function excluir($chave){
		try {
            $sql = "DELETE FROM usuario WHERE id= :id";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->bindValue(":id", $chave);
            $prep->execute();
        } catch (Exception $erro) {
        	echo "".Utilidades::mensagemErro("Erro técnico.");
	 		exit();
        }
	}

	public function listar(){
		try {
			$dados = array();
			$sql = "SELECT * FROM usuario";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $dados = $prep->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        } catch (Exception $erro) {
        }
	}

	public function listarId($id){
		try {
			$dados = array();
			$sql = "SELECT * FROM usuario WHERE id = $id";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $dados = $prep->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } catch (Exception $erro) {
        }
	}

	public function getUsu($id){
		try {
			$dados = array();
			$sql = "SELECT * FROM usuario WHERE id = $id";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $dados = $prep->fetch(PDO::FETCH_ASSOC);
            return $dados['nome'];
        } catch (Exception $erro) {
        }
	}

	public function login($email, $senha){
		try {
			$dados = array();
			$sql = "SELECT id,nome,funcao,situacao FROM usuario WHERE email=:email AND senha=:senha";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->bindValue(":email", $email);
            $prep->bindValue(":senha", $senha);
            $prep->execute();
            $dados = $prep->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } catch (Exception $erro) {
        }
	}
	
}

?>