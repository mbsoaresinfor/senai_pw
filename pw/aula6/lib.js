function mostraDados(texto){
    alert("Ola " + texto);
}

function escreverTela(){
    var index=0;
    for(index = 0; index < 5; index++){
        document.write("<b>Ola mundo</b></br>")
    }
}

function numeroParOuImpar(){
    var index=0;
    for(index=0; index <=10 ; index++){
        if(index % 2 == 0){
            document.write(index + " par<br> " );
        }else{ 
            document.write("impar " +
             index + "<br>");
        }
        console.info("executando n. " + index);
    }
}

function calculadora(){
    for(;;){
        var v1 = prompt("digite o valor 1");
        var v2 = prompt("digite o valor 2");
        var op = prompt("digite a operação "+
                "[+,-,sair]");
        
        if(op == "sair"){
            break;
        }else if(op == "+"){ // somar
            var soma = parseInt(v1) + parseInt(v2);
            alert("soma = "+ soma);
        }else if(op == "-"){ // subtracao
            var subtracao = parseInt(v1) - parseInt(v2);
            alert("subtracao = " + subtracao);
        }else{
            alert("opção inválida");
        }
    }
}