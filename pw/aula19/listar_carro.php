<html>
<body>

<script>
	function remover_carro(id){
		 location.href = 'remover_carro.php?id=' + id;
	}

</script>

<?php
echo "<a href='salvarCarro.html'>Principal</a><br>";

$servername="localhost";
$base="aula";
$usuario="root";
$senha="";
	
$con = mysqli_connect($servername,$usuario,$senha,$base);

if(!$con){
	echo "falha na conexão com o banco de dados";
	return;
}

$sql ="select * from carro";

$query = mysqli_query($con,$sql);
$temregistro=false;
while($linha = mysqli_fetch_array($query)){
		echo $linha["id"] . " -  " . $linha["nome"] . " ".$linha["ano_fabricacao"] .
		"<input type='button' value='Remover' onclick='remover_carro( " .$linha["id"] . " )'/>".
		"<br>";
		$temregistro = true;
}	

if($temregistro  == false){
	echo "não tem registros no banco de dados";
}

?>
</body>
</html>