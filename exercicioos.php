
<!-- Exercicio 9 e 10 --> 
<?php


	
	echo "Campo Hidden: ". $_POST["escondido"]."<br>";
	if(!isset($_POST["escondido"]) || ($_POST["escondido"]=="")){
		echo "O Campo est� vazio"."<br>";
		}
	$campo1 = strip_tags($_POST["escondido"]);
	
	echo "O valor de CAMPO 1 �: ".$_POST["campo1"]."<br>";
				if(!isset($_POST["campo1"]) || ($_POST["campo1"]=="")){
		echo "O Campo est� vazio"."<br>";
		}
	$campo2 = strip_tags($_POST["campo1"]);
	
	echo "Senha: ".$_POST["senha"]."<br>";
			if(!isset($_POST["senha"]) || ($_POST["senha"]=="")){
		echo "O Campo est� vazio"."<br>";
		}
	$campo3 = strip_tags($_POST["senha"]);
	$palavramd5 = md5("senha");
		echo $palavramd5."<br>"; 
	
	
			echo "Ol� " .$_POST["nome"] . "<br>";
		
		if(!isset($_POST["nome"]) || ($_POST["nome"]=="")){
		echo "O Campo est� vazio"."<br>";
		}
			$campo4 = strip_tags($_POST["nome"]);
			
			
			$email = trim(@$_REQUEST["email"]);

			if ($email) {
				if (preg_match ("/^[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*@[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*\\.[A-Za-z0-9]{2,4}$/", $email)) {
        echo "O e-mail � v�lido!"."<br>";
    } else {
        echo "O e-mail � inv�lido!"."<br>";
    }
}
		if(!isset($_POST["email"]) || ($_POST["email"]=="")){
		echo "O Campo est� vazio"."<br>";
		}
		$campo5 = strip_tags($_POST["email"]);
			

			echo "Sua mensagem: ".$_POST["mensagem"]."<br>";
			if(!isset($_POST["mensagem"]) || ($_POST["mensagem"]=="")){
		echo "O Campo est� vazio"."<br>";
		}
		$campo6 = strip_tags($_POST["mensagem"]);
	
		if(isset($_POST["numeros"])) 
	{ echo "Os n�meros de sua prefer�ncia s�o: "."<br>";
	foreach($_POST["numeros"] as $numero) 
	{ echo " ".$numero . "<BR>"."<br>"; } 
	} else { echo "Voc� n�o escolheu n�mero preferido!"."<br>"; }
	

	echo "Seu sistema operacional �: " .$_POST["sistema"]."<br>";
				if(!isset($_POST["sistema"]) || ($_POST["sistema"]=="")){
		echo "O Campo est� vazio"."<br>";
		}
	$campo8 = strip_tags($_POST["sistema"]);

	
	echo "Seu processador �: " . $_POST["processador"] ."<br>";
		if(!isset($_POST["processador"]) || ($_POST["processador"]=="")){
		echo "O Campo est� vazio"."<br>";
		}	
	$campo9 = strip_tags($_POST["processador"]);


			
		
		

		
	?>

