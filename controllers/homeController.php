<?php

class homeController extends controller {

	public function index() {
		$anuncios = new anuncios();
		$usuarios = new Usuarios();

		$dados = array(
 			'quantidade' => $anuncios->getQuantidade(),
 			'nome' => $usuarios->getNome(),
 			'idade' => $usuarios->getIdade()
		);

		$this->loadTemplate('home', $dados);

	}
}






?>