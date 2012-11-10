<?php

	$title="Site.com";
	$subtitle="Feito com PHP";
	$nome1 = "Fulano";
	$nome2 = "Fulana";
	$nome3 = "Ciclano";
	$sexo1 = "M";
	$sexo2 = "F";
	$sexo3 = "M";
	
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
	
	OLA MUNDO
	
	</h1>
	
	<div id="conteudo">
	<?php
	echo $nome1." , ".$nome2." , ".$nome3." , ".$sexo1." , ".$sexo2." , ". $sexo3;
	
	?>
	
	
	</div>
	
	
	
	</body>
	
	
</html>