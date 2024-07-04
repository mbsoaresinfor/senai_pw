<?php

$servername="localhost";
$base="aula";
$usuario="root";
$senha="";
$nome = $_POST["nome"];
$ano_fabricacao = $_POST["ano_fabricacao"];

if($nome == ""){
		echo "O nome do carro tem que ser digitado";
		return;
}
	
$con = mysqli_connect($servername,$usuario,$senha,$base);

if(!$con){
	echo "falha na conexão com o banco de dados";
	return;
}

$sql = "insert into carro (nome,ano_fabricacao) values (' " . $nome . " '," . $ano_fabricacao . ")";

if(mysqli_query($con,$sql)){
	header('Location: listar_carro.php');
}else{
	echo "erro ao inserir registro no banco de dados.";
}
?>