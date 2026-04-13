let contador = 1;
let numeros = [];

function calcMedia() {
    let soma = 0;
    for (let i = 0; i < numeros.length; i++) {
        soma += numeros[i];
    }
    const media = soma / numeros.length;

    // isso esconde o formulario
    const formulario = document.getElementById("numeros");
    formulario.style.display = "none";
    
    // exibindo resultado final
    document.getElementById("resultado").innerText = `Média final: ${media.toFixed(2)} (Números: ${numeros.join(", ")}).`;
}

function proximoNum() {
    const input = document.getElementById("n1");
    const labelnum = document.getElementById("contador");

    // caso não tenha número
    if (input.value === ""){
        alert("Digite um número.")
        return;
    }

    // contador do span
    if (contador < 5) {
        // guardando número em um vetor
        numeros.push(Number(input.value));

        // incrementa valor
        contador++;

        // atualizando apenas o número do label
        labelnum.innerText = contador;

        // limpa o campo 
        input.value = "";
        input.focus();
    } else {
        // quando chegar em 5, a média é executada
        numeros.push(Number(input.value));
        calcMedia();
    }
}