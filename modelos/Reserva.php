<?php
/*
classe para realizar reserva dos laboratorio
*/
class Reserva extends Conexao{
	// Declaração dos atributos:
	private $data;
	private $laboratorio;
	private $professor;
	private $status;

	// Implementação dos GETs e SETs:
	public function setData($data){
		$this->data = $data;
	}
	public function getData(){
		return $this->data;
	}

	public function setLab($laboratorio){
		$this->laboratorio = $laboratorio;
	}
	public function getLab(){
		return $this->laboratorio;
	}

	public function setProf($professor){
		$this->professor = $professor;
	}
	public function getProf(){
		return $this->professor;
	}

	public function setStatus($status){
		$this->status = $status;
	}
	public function getStatus(){
		return $this->status;
	}

	// Implementação das funções CRUD:
	public function cadastrar(){
		try{
			$sql = "INSERT INTO reserva(data,laboratorio,professor,status) VALUES(:data,:laboratorio,:professor,:status)";
			$prep = Conexao::getInstance()->prepare($sql);
	 
	        $prep->bindValue(":data", $this->getData());
	        $prep->bindValue(":laboratorio", $this->getLab());
	        $prep->bindValue(":professor", $this->getProf());
	        $prep->bindValue(":status", $this->getStatus());
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
            $sql = "UPDATE reserva set status = :status WHERE data = :data";
 
            $prep = Conexao::getInstance()->prepare($sql);
 
            $prep->bindValue(":status", $this->getStatus());
            $prep->bindValue(":data", $this->getData());
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
            $sql = "DELETE FROM reserva WHERE data= :data";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->bindValue(":data", $chave);
            $prep->execute();
            echo "".Utilidades::mensagemOK();
	 		exit();
        } catch (Exception $erro) {
        	echo "".Utilidades::mensagemErro("Erro técnico.");
	 		exit();
        }
	}

	// busca funcionario por reserva já existente:
	public function buscarData($data) {
        try {
            $sql = "SELECT * FROM reserva WHERE data = :data";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->bindValue(":data", $data);
            $prep->execute();
            $coluna = $prep->fetch(PDO::FETCH_ASSOC); 
            return $coluna['data'];
        } catch (Exception $erro) {
        }
    }

	public function listar(){
		try {
			$result = array();
			$sql = "SELECT * FROM reserva";
            $prep = Conexao::getInstance()->prepare($sql);
            $prep->execute();
            $result = $prep->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $erro) {
        }
	}
	
}

?>