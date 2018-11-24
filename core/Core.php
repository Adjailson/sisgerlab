<?php 
/*clase core vai ser nosso motor de busca e urls amigaveis*/
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