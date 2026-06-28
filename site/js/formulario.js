const telefone = document.getElementById("telefone");

telefone.addEventListener("input", function(){

    let valor = telefone.value.replace(/\D/g,'');

    valor = valor.replace(/^(\d{2})(\d)/,"($1) $2");

    valor = valor.replace(/(\d{5})(\d)/,"$1-$2");

    telefone.value = valor;

});

document.getElementById("formulario").addEventListener("submit", function(e){

    let assunto = document.getElementById("assunto");
    let politica = document.getElementById("politica");

    if(assunto.value==""){

        alert("Selecione um assunto.");

        e.preventDefault();

        return;

    }

    if(!politica.checked){

        alert("Você deve concordar com a Política de Privacidade.");

        e.preventDefault();

        return;

    }

});