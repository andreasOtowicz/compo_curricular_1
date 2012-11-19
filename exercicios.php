<?php

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
	
	
	<fieldset>
			<legend>Formulario de cadastro</legend>
	
	
	<form action ="exercicioos.php" method ="POST">
	<br>
				<input type="hidden" name= "escondido" value="valor do escondido"/> 
				<br>
				Campo 1: <input type="text" name="campo1"/><br>
				<br>
				
				Password: <input type="password" name="senha"  maxlength=6 /><br>
				<br>
				
				Nome: <input type="text" name="nome"/><br> 
				
				Email: <input type="text" name="email" size="20" value=" " />
					<?php echo @$_REQUEST["email"]; ?> 
					
					<br>

				Mensagem: <textarea name="mensagem" cols=8 rows=3></textarea><br>
				<br>
				
				<br>

				Escolha os numeros de sua preferência:<br> 
				<input type="checkbox" name="numeros[]" value="10"/> 10<br>
				<input type="checkbox" name="numeros[]" value="20"/> 20<br>
				<input type="checkbox" name="numeros[]" value="30"/> 30<br>
				<input type="checkbox" name="numeros[]" value="40"/> 40<br>
				<br>
				Qual seu sistema?<br> 
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
				<button class="btn btn-large btn-primary">Botão grande</button>
	
	</fieldset>
	
	
        
			</form>

	
	
	
	
	</body>
	
	
</html>