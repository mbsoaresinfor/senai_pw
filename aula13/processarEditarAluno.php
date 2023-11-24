<?php

$id = $_POST["id"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];


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

$sql = "update aluno set nome = '" .$nome. "', idade=". $idade . 
        " where id = " . $id;

if(mysqli_query($conn,$sql))    {
    header('Location: processarListagemAluno.php');
}else{
    echo "Erro ao atualizar aluno de id = " + $id;
}

mysqli_close($conn);




?>