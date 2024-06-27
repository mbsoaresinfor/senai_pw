<html>
<body>

<?php
echo "<a href='salvarAluno.html'> Principal</a><br>";

$servername="localhost";
$base="aula";
$usuario="root";
$senha="";
	
$con = mysqli_connect($servername,$usuario,$senha,$base);

if(!$con){
	echo "falha na conexão com o banco de dados";
	return;
}

$sql ="select * from aluno";

$query = mysqli_query($con,$sql);
$temregistro=false;
while($linha = mysqli_fetch_array($query)){
		echo $linha["id"] . " -  " . $linha["nome"] . " ".$linha["idade"] .
		"<a href='remover_aluno.php?id=" . $linha["id"] .  "'> Remover </a> " .
		"<br>";
		$temregistro = true;
}	

if($temregistro  == false){
	echo "não tem registros no banco de dados";
}

?>
</body>
</html>