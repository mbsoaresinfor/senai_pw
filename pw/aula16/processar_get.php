<?php
$nome =  "";
if(isset($_GET["nome"])){
	$nome = $_GET["nome"];
}
$idade = "";
if(isset($_GET["idade"])){
	$idade = $_GET["idade"];
}
if($nome == "" || $idade == ""){
	echo "não foi informado os parametros na url";
	return;
}
echo "eu recebi do front-end VIA GET o valor " . $nome;
echo "<br>";
echo "eu recebi outro valor do front-end VIA GET " . $idade;

?>