function tabela_dinamica(){

    var totalLinhas = prompt("digite a quant. de linhas da tabela");
    var totalCol = prompt("digite a quant. de colunas da tabela");

    document.write("<table border='1'>");
    var contador=1;
    for(var linha=0; linha < totalLinhas; linha++ ){
        if(linha % 2 == 0){        
            document.write("<tr bgcolor='blue'>");
        }
        else{
            document.write("<tr bgcolor='red'>");
        }
        
        for(var coluna=0; coluna < totalCol; coluna++ ){                        
                document.write("<td>")
                document.write("coluna: " + (contador++));
                document.write("</td>");           
        }
        document.write("</tr>")        
    }

    document.write("</table>");

}

function exercicio7(){
    var nome = prompt("digite nome do produto");
    var preco = prompt("digite o preço do produto");

    if(isNaN(preco)){
        alert("preço digitado não é um número");
        return;
    }

    if(parseInt(preco) > 100){
        alert("preço do produto > 100");
    }else{
        alert("preço do produto < 100");
    }

}