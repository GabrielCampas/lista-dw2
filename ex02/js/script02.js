function calcularTudo() {
    let n1 = Number(document.getElementById("numero1").value);
    let n2 = Number(document.getElementById("numero2").value);

    // calculos
    let soma = n1 + n2;
    let subtrair = n1 - n2;
    let multiplicar = n1 * n2;
    let dividir = n2 !== 0 ? (n1 / n2).toFixed(2) : "Não é possível dividir por zero."

    // saída de dados
    document.getElementById("somar").innerText = `${n1} + ${n2} = ${soma}.`
    document.getElementById("subtracao").innerText = `${n1} - ${n2} = ${subtrair}.`
    document.getElementById("multiplicacao").innerText = `${n1} * ${n2} = ${multiplicar}.`
    document.getElementById("divisao").innerText = `${n1} / ${n2} = ${dividir}.`

    // conexão com o botão
    document.getElementById("ex02").addEventListener("submit", function (event) {
        event.preventDefault();
        calcularTudo();
    });
}