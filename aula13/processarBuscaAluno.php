<?php

$id = $_POST["id"];
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

$sql = "select id,nome,idade from aluno 
        where id = " . $id;

$tabela = mysqli_query($conn,$sql) or
    die(mysql_error($conn));

$totalLinhas = mysqli_num_rows($tabela);
if($totalLinhas == 0){
    echo "Aluno não encontrado com o id " . $id;
    return;
}
echo "ALUNO ENCONTRADO<br>";
echo "<table border=1>";
echo "<tr><th>ID</th><th>NOME</th><th>IDADE</th></tr>";
while($linha = mysqli_fetch_array($tabela)){
    echo "<tr><td>";
        echo $linha["id"] ;
    echo "</td>";
    
    echo "<td>";
        echo $linha["nome"] ;
    echo "</td>";
    
    echo "<td>";
        echo $linha["idade"] ;
    echo "</td></tr>";
}
echo "</table>";
mysqli_close($conn);

echo "<a href='cadAlunoView.html'>Voltar</>";


?>