<html>

<body>

	<script>
		document.write("js</br>");
	</script>

	<?php
		// isso é um comentário em php
		echo "ola mundo</br>aqui sigo com php";		
		echo "<br><h1>brasil</h1><br>";
		
		echo "<table border='1'><tr><td>nome</td></tr></table>";
		
		$nome = "marcelo";
		$idade = 41;
		$cidade = "cachoeirinha";
		
		echo "meu nome é: " . $nome . 		"<br>";
		echo "minha idade é: " . $idade . 	"<br>";
		echo "minha cidade é: " . $cidade . "<br>";
		
		$v1 = 10;
		$v2 = 30;
		$soma = $v1 + $v2;
		$valor_maximo = 100;
		
		if($soma > $valor_maximo){
			echo "<b>valor maior que " . $valor_maximo . "</b>";
		}else{
			echo "<b>valor menor que " . $valor_maximo . "</b>";
		}
		
	?>
	

</body>

</html>
	
	
	