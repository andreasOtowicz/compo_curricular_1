
<h1>Adicionando Postagem</h1>

<?php
	#criando o formulario através do ajudante form
	echo $this->Form->created['Post'];

	# gerando os inputs através do ajudante form
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));

	#fechando o formulário  e gerando o botão submit
	echo $this->Form->end['Enviar']
