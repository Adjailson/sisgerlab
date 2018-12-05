<?php
/**
 * classe para funções diversas para serem chamadas so sistema;
 */
class Utilidades {
	
	function __construct(){
		# code...
	}

	public static function mensagemOk() {
        $dados = "";
        $dados = "<div class='alert alert-success'> <h3>Sucesso!</h3> <a href='home' class='btn btn-success'>Ok</a> </div>";
        return $dados;
    }

    public static function mensagemErro($msn) {
        $dados = "";
        $dados = "<div class='alert alert-danger'> <h3>".$msn."</h3> <a href='JavaScript: window.history.back();' class='btn btn-danger'>Voltar</a> </div>";
        return $dados;
    }
}
?>