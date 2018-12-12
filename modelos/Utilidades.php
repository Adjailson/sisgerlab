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
        $dados = "<div class='alert alert-success'> <h4>Sucesso!</h4> <a href='calendario' class='btn btn-success'>Ok</a> </div>";
        return $dados;
    }

    public static function mensagemErro($msn) {
        $dados = "";
        $dados = "<div class='alert alert-danger'> <h4>".$msn."</h4> <a href='JavaScript: window.history.back();' class='btn btn-danger'>Voltar</a> </div>";
        return $dados;
    }

    public static function isLogado(){
        if (!empty($_SESSION['nome']) && !empty($_SESSION['tipo'])) {
            return true;
        } else {
            return false;
        }
    }

    public static function menuPersonalisado(){
        if ($_SESSION['tipo'] == "Coordenador") {
            echo "<a class='btn btn-outline-success my-2 my-sm-0' href='coorconfig'>Gerir Reservas <span class='sr-only'></span></a>";
        } elseif ($_SESSION['tipo'] == "Administrador") {
            echo "<a class='btn btn-outline-success my-2 my-sm-0' href='admconfig'>Configurações <span class='sr-only'></span></a>";
            echo "<a class='btn btn-outline-success my-2 my-sm-0' href='coorconfig'>Gerir Reservas <span class='sr-only'></span></a>";
        }
        
    }

    public static function menuConfig(){
        if (!empty($_SESSION['nome']) && !empty($_SESSION['tipo'])) {
            return "<a class='btn btn-outline-success my-2 my-sm-0' href='minhasreservas'>My Reservas<span class='sr-only'></span></a>
            <a class='btn btn-outline-success my-2 my-sm-0' href='home'>".$_SESSION['nome']."<span class='sr-only'></span></a>
            <a class='btn btn-outline-success my-2 my-sm-0' href='sair'>Sair <span class='sr-only'></span></a>";
        } else {
            return "<a class='btn btn-outline-success my-2 my-sm-0' href='login'>Login <span class='sr-only'></span></a>
            <a class='btn btn-outline-success my-2 my-sm-0' href='cadastro'>Cadastro <span class='sr-only'></span></a>";
        }
    }

    public static function btConfig(){
        if (!empty($_SESSION['nome']) && !empty($_SESSION['tipo'])) {
            return "<a href='calendario' class='btn btn-primary btn-lg'>Socicitar Reserva</a>";
        } else {
            return "<a href='cadastro' class='btn btn-primary btn-lg'>Solicitar Acesso</a>";
        }
    }
}
?>