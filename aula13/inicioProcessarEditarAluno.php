<html>

<body>

Edição de Aluno -> ID: <?php echo $_GET["id"]; ?>
</br>
<form action="processarEditarAluno.php" method="post">
Nome  <input type="text" name="nome"/><br>
Idade <input type="text" name="idade"/><br>
<input type="hidden" name="id" value=<?php echo $_GET["id"]; ?> > 
<input type="submit" value="Editar"/>
</form>

</body>

</html>