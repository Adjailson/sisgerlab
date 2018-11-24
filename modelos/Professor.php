<?php

class Professor extends Modelo {
	// Declaração dos atributos:
	private $numero;
	private $nome;
	private $genero;
	private $email;
	private $senha;

	// Implementação dos GETs e SETs:
	public function setNumero($numero){
		$this->numero = $numero;
	}
	public function getNumero(){
		return $this->numero;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}

	public function setGenero($genero){
		$this->genero = $genero;
	}
	public function getGenero(){
		return $this->genero;
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

	

	// Implementação das funções CRUD:
	// A variavel de 'db' vem da classe Model

	public function cadastrar(Professor $professor){

		$numero = addslashes($professor->getNumero());
		$nome = addslashes($professor->getNome());
		$genero = addslashes($professor->getGenero());
		$email = addslashes($professor->getEmail());
		$senha = md5(addslashes($professor->getSenha());

		$sql = "INSERT INTO professor SET numero='$numero',nome='$nome',genero='$genero',email='$email',senha='$senha'";

		$sql = $this->db->query($sql);
		
	}

	public function editar(Professor $professor){

		$numero = addslashes($professor->getNumero());
		$nome = addslashes($professor->getNome());
		$genero = addslashes($professor->getGenero());
		$email = addslashes($professor->getEmail());
		$senha = md5(addslashes($professor->getSenha());

		$sql = "UPDATE professor SET nome='$nome',genero='$genero',email='$email', senha='$senha' WHERE numero='$numero'";
		$sql = $this->db->query($sql);
	}

	public function excluir($chave){
		$numero = addslashes($chave);
		$sql = "DELETE FROM professor WHERE numero='$numero'";
		$sql = $this->db->query($sql);
	}

	public function listar(){
		$dados = array();
		$sql = "SELECT * FROM professor";
		$sql = $this->db->query($sql);
		if ($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
		}
		return $dados;
	}
	
}

?>