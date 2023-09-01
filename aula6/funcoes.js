function escreverNaTela(){
    var index=0;
    for(index=0; index < 5; index++){
        document.write("olá mundo</br> "  + index);
        document.write("<h3>outro teste</h3></br>");
        document.write("<img src='dog.jpg' width='24' height='24'/>");
    }
    document.write("");
}

function somar(a, b){
    return a + b;
}
function mostrarNome(nome){
    alert("meu nome é " + nome);
}

function exercicio6(){
    
    while(true){
        var op = prompt("Digite a operação[+,-,sair]");
        if(op == "sair"){
            return;
        }else if(op == "+"){
            var v1 = prompt("digite o valor 1")
            var v2 = prompt("digite o valor 2")
            var soma = parseInt(v1) + parseInt(v2) ;
            if(isNaN(soma)){
                alert("VAlores digitados inválidos");
            }else{
                alert("a soma foi : " + soma);
            }

        }else if(op == "-"){
            var v1 = prompt("digite o valor 1")
            var v2 = prompt("digite o valor 2")
            var subtracao = parseInt(v1) - parseInt(v2) ;
            if(isNaN(subtracao)){
                alert("VAlores digitados inválidos");
            }else{
                alert("a subtracao foi : " + subtracao);
            }
        }else{
            alert("Opção inválida");
        }
        
    }
}