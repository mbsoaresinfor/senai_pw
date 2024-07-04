<?php
$servername="localhost";
$base="aula";
$usuario="root";
$senha="";
$id = $_GET["id"];

	
$con = mysqli_connect($servername,$usuario,$senha,$base);

if(!$con){
	echo "falha na conexão com o banco de dados";
	return;
}


$sql = "delete from carro where id = " . $id ;

if(mysqli_query($con,$sql)){
	header('Location: listar_carro.php');
}else{
	echo "erro ao remover registro no banco de dados.";
}
?>