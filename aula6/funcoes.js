function escreverNaTela(){
    var index=0;
    for(index=0; index < 5; index++){
        document.write("olá mundo</br> "  + index);
        document.write("<h3>outro teste</h3></br>");
        document.write("<img src='dog.jpg' width='24' height='24'/>");
    }
    document.write("");
}

function mostrarNome(nome){
    alert("meu nome é " + nome);
}