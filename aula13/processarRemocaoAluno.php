<?php

$id = $_GET["id"];
if($id == ""){
    echo "Id deve ser preenchido";
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

$sql = "delete from aluno where id = " . $id;

if(mysqli_query($conn,$sql))    {
    header('Location: processarListagemAluno.php');
}else{
    echo "Erro ao deletar aluno de id = " + $id;
}

mysqli_close($conn);




?>