<?php

$servername="localhost";
$base="aula";
$usuario="root";
$senha="";
$nome = $_POST["nome"];
$idade = $_POST["idade"];

if($nome == ""){
		echo "O nome tem que ser digitado";
		return;
}
	
$con = mysqli_connect($servername,$usuario,$senha,$base);

if(!$con){
	echo "falha na conexão com o banco de dados";
	return;
}
echo "conectado no banco de dados<br>";


$sql = "insert into aluno (nome,idade) values (' " . $nome . " '," . $idade . ")";

if(mysqli_query($con,$sql)){
	header('Location: listar_aluno.php');
}else{
	echo "erro ao inserir registro no banco de dados.";
}
?>