<script>
    function deletar(id){
     var resultado = confirm("Deseja remover o produto de id " +  id);
     if(resultado == true){
        // remover o produto
        var url = "processarRemocaoAluno.php?id=" + id;
        window.location.href = url;
     }
    }

    function editar(id){     
        var url = "inicioProcessarEditarAluno.php?id=" + id ;        
        window.location.href = url;     
    }

</script>

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
echo "<tr><th>ID</th><th>NOME</th><th>IDADE</th><th>Remover</th><th>Editar</th></tr>";
while($linha = mysqli_fetch_array($tabela)){
    echo "<tr><td>";
        echo $linha["id"] ;
    echo "</td>";
    
    echo "<td>";
        echo $linha["nome"] ;
    echo "</td>";
    
    echo "<td>";
        echo $linha["idade"] ;
    echo "</td>";

    echo "<td>";
        echo "<input type='button'  value='remover'
        onclick='deletar( " . $linha['id'].  ")' />";
    echo "</td>";

    echo "<td>";
        echo "<input type='button'  value='editar'
        onclick='editar(" . $linha['id'].")'/>";
    echo "</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);

echo "<a href='cadAlunoView.html'>Voltar</>";


?>