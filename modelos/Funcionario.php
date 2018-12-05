<?php

class Funcionario extends Conexao{
	// Declaração dos atributos:
	private $cpf;
	private $nome;
	private $email;
	private $senha;
	private $funcao;

	// Método 2: usando o proprio nome da classe
    public function Funcionario($cpf, $nome, $email, $senha, $funcao) {
	    $this->setCpf($cpf);
	    $this->setNome($nome);
	    $this->setEmail($email);
	    $this->setSenha($senha);
	    $this->setFuncao($funcao);
    }

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

	// Implementação das funções CRUD:
	public function cadastrar(){
		try{
			$sql = "INSERT INTO funcionario(cpf,nome,email,senha,funcao) VALUES(:cpf,:nome,:email,:senha,:funcao)";
			$prep = Conexao::getInstance()->prepare($sql);
	 
	        $prep->bindValue(":cpf", $this->getCpf());
	        $prep->bindValue(":nome", $this->getNome());
	        $prep->bindValue(":email", $this->getEmail());
	        $prep->bindValue(":senha", $this->getSenha());
	        $prep->bindValue(":funcao", $this->getFuncao());
	 		$prep->execute();
	 		echo "".Utilidades::mensagemOK();
	 		exit();
        } catch (Exception $erro) {
        	echo "".Utilidades::mensagemErro("Erro técnico.");
	 		exit();
        }
	}

	public function editar() {
        try {
            $sql = "UPDATE funcionario set nome = :nome, email = :email, senha = :senha, funcao =:funcao WHERE cpf = :cpf";
 
            $prep = Conexao::getInstance()->prepare($sql);
 
            $prep->bindValue(":nome", $this->getNome());
            $prep->bindValue(":email", $this->getEmail());
            $prep->bindValue(":senha", $this->getSenha());
            $prep->bindValue(":funcao", $this->getFuncao());
            $prep->bindValue(":cpf", $this->getCpf());
            $prep->execute();
            echo "".Utilidades::mensagemOK();
	 		exit();
        } catch (Exception $erro) {
        	echo "".Utilidades::mensagemErro("Erro técnico.");
	 		exit();
        }
    }

	public function excluir($chave){
		try {
            $sql = "DELETE FROM funcionario WHERE cpf= :cpf";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->bindValue(":cpf", $chave);
            $prep->execute();
            echo "".Utilidades::mensagemOK();
	 		exit();
        } catch (Exception $erro) {
        	echo "".Utilidades::mensagemErro("Erro técnico.");
	 		exit();
        }
	}

	// busca funcionario por cpf já existente:
	public function buscarCpf($cpf) {
        try {
            $sql = "SELECT * FROM funcionario WHERE cpf = :cpf";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->bindValue(":cpf", $cpf);
            $prep->execute();
            $coluna = $prep->fetch(PDO::FETCH_ASSOC); 
            return $coluna['cpf'];
        } catch (Exception $erro) {
        }
    }

	public function listar(){
		try {
			$dados = array();
			$sql = "SELECT * FROM funcionario";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $prep->fetch(PDO::FETCH_ASSOC);
            if($prep->rowCount() > 0){
            	$dados = $prep->fetchAll();
            }
            return $dados;
        } catch (Exception $erro) {
        }
	}
	
}

?>