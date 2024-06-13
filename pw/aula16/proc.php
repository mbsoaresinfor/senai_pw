<?php
$nome = $_POST["nome"];
$estacao = $_POST["estacao"];
$c_arroz  = "";

if(isset($_POST["c1"])){
	 $c_arroz ="true";
 }
$times  = "";

if(isset($_POST["times"])){
	$times = $_POST["times"];
}

if($nome == ""){
	echo "favor digitar seu nome";
	return;
}

if($times == ""){
	echo "favor escolher seu time";
	return;
}
echo "seu nome e " . $nome;
echo "<br>";
echo "vc gosta da estacao " . $estacao;
echo "<br>";
if($c_arroz == "true"){
	echo "vc gosta de arroz ";
}else{
	echo "vc NAO gosta de arroz ";
}
echo "<br>";
echo "seu time do coracao e o" . $times;


?>