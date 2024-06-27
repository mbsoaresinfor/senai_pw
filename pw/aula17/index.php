<?php
$servername="localhost";
$base="aula";
$usuario="root";
$senha="";
	
$con = mysqli_connect($servername,$usuario,$senha,$base);

if(!$con){
	echo "falha na conexão com o banco de dados";
	return;
}
echo "conectado no banco de dados<br>";

$sql = "insert into aluno (id,nome,idade) values (null,'marcelo',50)";

if(mysqli_query($con,$sql)){
	echo "inserido registro no banco de dados";
}else{
	echo "erro ao inserir registro no banco de dados.";
}
?>