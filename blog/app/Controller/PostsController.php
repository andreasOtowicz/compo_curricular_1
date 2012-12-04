<?php

class PostsController extends AppController{

	public $helpers = array ('Html','Form');
	public $components = array ('Session');


	//action 
	// /posts/index
	public function index(){
		$todasAsPostagens = $this->Post->find('all');


		//Jogar para view
	$this->set('posts', $todasAsPostagens);

	}


	public function view($id = null){

		//setar o Post com o id == 3
		$this->Post->id = $id;

		//procurar no banco o item com id 3
		$p = $this->Post-> read();

		//enviando para a View os campos do item
		$this->set('post',$p);

	}

	# /posts/add
	public function add(){
		# se for enviado um Post pegar os dados  do form e salvar no banco
		if ($this->request->is('post')){

			$dadosDoFormulario = $this->request->data;

			# tentar salvar os dados , se conseguir salvar, mostra uma mensagem  e redicionar para o Index

			if($this->Post->save($dadosDoFormulario)){
				# mostrar a mensagem

				$this->Session->setFlash("A postagem foi inserida com sucesso");

				# redicionar para  o index
				$this->redirect(array('action' => 'index'));

			}

		}



	}
}

