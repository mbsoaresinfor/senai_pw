
<html>
<body>

<script>
	function validar(){
		var nome = document.getElementById("nome").value;
		if(nome == ""){
			alert("digite seu nome");
			return false;
		}
		return true;
			
	}
</script>

<a href='listar_aluno.php'> Principal</a><br>

<?php
$servername="localhost";
$base="aula";
$usuario="root";
$senha="";
$id = "";
$con = mysqli_connect($servername,$usuario,$senha,$base);

if(!$con){
	echo "falha na conexão com o banco de dados";
	return;
}


if(isset($_GET["id"])){
	$id	= $_GET["id"];
}	

if(isset($_POST["operacao"])){
	$operacao =$_POST["operacao"];
	$id =$_POST["id"];
	$novo_name =$_POST["nome"];
	$nova_idade =$_POST["idade"];
	
	if($operacao == "update"){
		$sql = "update aluno set nome = '" . $novo_name . "', idade = ".	$nova_idade . " where id = " . $id;
		if(mysqli_query($con,$sql)){
			header('Location: listar_aluno.php');
		}else{
			echo "erro ao atualizar registro no banco de dados.";
		}
	}	
	return;
}


$sql ="select * from aluno where id = " . $id;

$query = mysqli_query($con,$sql);
$temregistro=false;
while($linha = mysqli_fetch_array($query)){
	
?>
	Atualização de aluno <br>
	<form action="atualizar_aluno.php" method="post">
	Nome: <input type="text" name="nome" id="nome" value="<?php echo  trim($linha['nome']) ?>"/>
	<br>
	Idade <input type="text" name="idade" id="idade" value="<?php echo trim($linha['idade']) ?>"/>
	<br>
	
	<input type="hidden" name="id" value="<?php echo $id ?>"/>
	<input type="hidden" name="operacao" value="update"/>
	<input type="submit" value="atualizar" onclick="return validar();"/>
	</form>
<?php	
	}
?>


</body>
</html>




