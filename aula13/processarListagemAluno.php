<?php

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

$sql = "select id,nome,idade from aluno";

$tabela = mysqli_query($conn,$sql) or
    die(mysql_error($conn));
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