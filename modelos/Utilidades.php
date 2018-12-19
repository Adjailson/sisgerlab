<?php
/**
 * classe para funções diversas para serem chamadas so sistema;
 */
class Utilidades {
	
	function __construct(){
		# code...
	}

	public static function mensagemOk($msn) {
        $dados = "";
        $dados = "<div class='alert alert-success'> <h4>".$msn."</h4> <a href='JavaScript: window.history.back();' class='btn btn-success'>Voltar</a> </div>";
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
            echo "<div class='btn-group'>
                <button class='btn btn-secondary btn-lg dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  Menu
                </button>
                <div class='dropdown-menu'>
                  <a class='dropdown-item' href='coorconfig'>Reservas</a>
                  <a class='dropdown-item' href='minhasreservas'>Minhas reservas</a>
                  <div class='dropdown-divider'></div>
                  <a class='dropdown-item' href='sair'>Sair</a>
                </div>
              </div>";
        } elseif ($_SESSION['tipo'] == "Administrador") {
            echo "<div class='btn-group'>
                <button class='btn btn-secondary btn-lg dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  Menu
                </button>
                <div class='dropdown-menu'>
                  <a class='dropdown-item' href='admconfig'>Cadastros</a>
                  <a class='dropdown-item' href='coorconfig'>Reservas</a>
                  <a class='dropdown-item' href='minhasreservas'>Minhas reservas</a>
                  <div class='dropdown-divider'></div>
                  <a class='dropdown-item' href='sair'>Sair</a>
                </div>
              </div>";
        } elseif ($_SESSION['tipo'] == "Professor") {
            echo "<div class='btn-group'>
                <button class='btn btn-secondary btn-lg dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  Menu
                </button>
                <div class='dropdown-menu'>
                  <a class='dropdown-item' href='minhasreservas'>Minhas reservas</a>
                  <div class='dropdown-divider'></div>
                  <a class='dropdown-item' href='sair'>Sair</a>
                </div>
              </div>";
        } elseif (empty($_SESSION['nome']) && empty($_SESSION['tipo'])){
            echo "<a class='btn btn-outline-success my-2 my-sm-0' href='login'>Login <span class='sr-only'></span></a>
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

    public static function enviarEmail($nome, $email, $mensagem){
      try {
        $para = "sisgerlabupe@gmail.com";
        $assunto = "MENSAGEM DO WEBSITE";
        $corpo = "Nome: ".$nome."\r\nE-mail: ".$email."\r\nMensagem:\r\n".$mensagem;
        $cabecalho = "From: sisgerlabupe@gmail.com\r\n".
            "Reply-To: ".$email."\r\n".
            "X-Mailer: ".phpversion();
        mail($para, $assunto, $corpo, $cabecalho);
        echo "".Utilidades::mensagemOk("Enviado com sucesso!");
        exit();
      } catch (Exception $e) {
        echo "".Utilidades::mensagemErro("Erro ao enviar!");
        exit();
      }
    }
}
?>