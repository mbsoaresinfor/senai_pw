<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    isso é html puro

    <?php
        echo "<br>agora este texto é PHP<br>";
        $nome = "pedro";
        $idade = 17;
        echo "Meu nome é " . $nome;
        echo "<br>";
        echo "Minha idade é " . $idade;
        if($idade >= 18 ){
            echo "<br>vc é maior de idade";
        }else{
            echo "<br>vc é menor de idade";
        }
        if($idade < 0 || $nome =="" ){
            echo "Parametros inválidos";
        }
        for($i=0; $i < 2; $i++ ){
            echo "</br>isso é um for" . $i;
        }
        echo "<br>";
        $arr = array(1, 2, 3, 4);
        foreach ($arr as $valor) {
            echo $valor . "<br>";
        }

        for($i=0; $i < sizeof($arr); $i++ ){
            echo "</br>isso é um for" .
            $arr[$i];
        }

        // and &&
        // or ||
        // !

        if($nome == ""){
            echo "vc não digitou seu nome";
        }
    ?>

</body>
</html>