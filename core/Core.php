<?php 
/* 
A clase core vai ser nosso motor de busca e urls amigaveis
no primeiro momento a variavel de pesquisa que declaramos
no arquivo .htaccess. Em seguida passar esses valores para
um array e definir por onde e de onde vai ser buscado a in-
formação acessada se vem do (Modelo ou da Visão) tudo através
do pacote Controle.
*/
class Core{

	public function carregar(){

		$url = '/'.((isset($_GET['q'])) ? $_GET['q']:'');

		$paramentro = array();
		if (!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);
			@$currentController = $url[0].'Controle';
			array_shift($url);

			if (isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}

			if (count($url) > 0) {
				$paramentro = $url;
			}
		}else{
			$currentController = 'homeControle';
			$currentAction = 'index';
		}
		require_once 'core/Controle.php';
		$c = new $currentController();
		@call_user_func_array(array($c, $currentAction), $paramentro);
	}
}

?>