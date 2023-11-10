<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if($nome == ""){
    echo "Nome está vazia";
    return;
}
if($idade == ""){
    echo "Idade está vazia";
    return;
}

$serverName = "localhost";
$database = "aula";
$userName = "root";
$password = "";

$conn= mysqli_connect($serverName,$userName,    
            $password, $database);

if(!$conn){
    die("Erro na conexão do DB " 
            . mysqli_connect_error());
}

$sql = "insert into aluno (nome,idade) values
    ('". $nome . "'," . $idade .")";

if(mysqli_query($conn,$sql))    {
    header('Location: processarListagemAluno.php');
}else{
    echo "Erro ao inserir o aluno";
}
mysqli_close($conn);


?>