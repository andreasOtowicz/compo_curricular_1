﻿<?php

	$title="Site.com";
	$subtitle="Feito com PHP";
	$nome1 = "Fulano";
	$nome2 = "Fulana";
	$nome3 = "Ciclano";
	$sexo1 = "M";
	$sexo2 = "F";
	$sexo3 = "M";
	$qtd = 1;
	
?>

<!Doctype html>

<html>
	<head>
		<meta charset="utf-8" >
			<title>
		<?php
		
			echo $title." - ".$subtitle;
			
			
		?>
			</title>
	</head>
	<body>
	<div id = "rodape">
	
	&reg copyright Site.com <?php echo date("Y"); ?>
	
	</div>
	<h1>
	
		
	
	<div id="conteudo">
	
	<?php
	
			echo $nome1." , ".$nome2." , ".$nome3." , ".$sexo1." , ".$sexo2." , ". $sexo3 ;	
	
	?>
	
	
	
	</div>
	</h1>
	
	
	<?php
		
		
		echo $nome1." , ".$nome2." , ".$nome3." , ".$sexo1." , ".$sexo2." , ". $sexo3 ;
		
		if($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M"){	
				echo  "<p>A Equipe toda é masculina</p>";
				}
		else if($sexo1 == "F" && $sexo2 == "F" && $sexo3 == "F"){
				echo "<p>A equipe é toda feminina</p>";
	 			}
		else {
				echo "<p>A Equipe é mista</p>";
				}
		?>
		
	<?php
		$qtd = 4;
	switch ($qtd) {
		case 0:
        echo "Não possui nenhum produto cadastrado";
        break;
    case 1:
        echo "Possui um produto cadastrado";
        break;
    case 2:
        echo "Possui vários produtos cadastrados";
        break;
	case 3:
        echo "Possui vários produtos cadastrados";
        break;
	default:
		echo "Cadastro Inválido"; 
		
			}
	?>
	
	<?php
	
	for($i=0; $i<25; $i++){

		echo "<p>Lactobacilos vivos também possuem sentimentos</p>";
		}
	
	?>
	
	<?php
	$i = 0;
	$num = 25;
	
	while( $i <= $num){
	
	echo $i." , ";
	
	$i++;
	}
	?>
	
	<p>
		<?php
	
		$num1 = 3;
		$num2= 8;
	
		while($num1 < $num2){
			$num1++;
			if($num1< $num2){
			echo $num1." , ";
			}
		}
		$num1 --;
		
		?>
	</p>
	
	<?php
	
	$nume1 = 3;
	$nume2 = 5;
	$soma = 0;
	for($i = 0; $i < $nume1; $i++){
		$soma = $soma + $nume2;
			
	}
	echo $soma;
	
	
	?>
	
	<?php
	
	$imprime = "Andreas Otowicz";
	
	echo "<p>$imprime</p>";
	
	?>
	
	
	
	
	
	<form action="" method="POST">
	<br>
	<input type="hidden" name= "escondido" value="valor do escondido"/> 
	<br>
	Campo 1: <input type="text" name="campo1"/><br>
	<br>
	
	Password: <input name="senha" type="password" maxlength=6 /><br>
	<br>
	
	Nome: <input type="text" name="nome"/><br> 
	Email: <input type="text" name="email"/><br><br> 
	Mensagem: <textarea name=mensagem cols=8 rows=3></textarea><br>
	<br>
	<input type="submit"/><br>
	<br>

	<B>Escolha os numeros de sua preferência:</B><br> 
	<input type="checkbox" name="numeros[]" value=10/> 10<br>
	<input type="checkbox" name="numeros[]" value=10/> 20<br>
	<input type="checkbox" name="numeros[]" value=10/> 30<br>
	<input type="checkbox" name="numeros[]" value=10/> 40<br>
	<br>
	<B>Qual seu sistema?</B><br> 
	<br><input type="radio" name="sistema" value="Windows 98"/> Win 98<br> 
	<br><input type="radio" name="sistema" value="Windows 98"/> Linux<br>
	<br><input type="radio" name="sistema" value="Windows 98"/> Mac<br> 
	<br>
	
	<B>Qual seu processador?</B><br> 
	<select name="processador"> <option value="Pentium">Pentium</option><br> 
	<option value="AMD">AMD</option><br>
	<option value="Celeron">Celeron</option><br> 
	</select><br>
	<br>
	<br>
	<input type="submit" value="OK"/> 
	
	</form>

	
	
	<?php
	
	$hidden = $_POST["hidden"];
	
	echo "Campo Hidden: " .$hidden;
	
	echo "O valor de CAMPO 1 é: ".$_POST["campo1"];
	
	echo $senha = $_POST['password'];

	
	
	echo "Olá " . $_POST["nome"] . " (email: " . $_POST["email"] . ")<br><br>"; 
	echo "Sua mensagem: " . $_POST["mensagem"]; 


	
	if(isset($_POST["numeros"])) 
	{ echo "Os números de sua preferência são:<BR>";
	foreach($_POST["numeros"] as $numero) 
	{ echo "- " . $numero . "<BR>"; } 
	} else { echo "Você não escolheu número preferido!<br>"; }

	echo "Seu sistema operacional é: " .$_POST["sistema"];

	echo "Seu processador é: " . $_POST["processador"] . "<BR>";

	?>
	
	</body>
	
	
</html>