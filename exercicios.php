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
	
	</body>
	
	
</html>