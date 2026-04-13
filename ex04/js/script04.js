function calcMedia() {
    const formulario = document.getElementById("ex04");
    formulario.addEventListener("submit", function (event) {
        event.preventDefault();
    });

    // processando dados
    const presenca = document.getElementById("presenca").value;
    const n1 = Number(document.getElementById("nota1").value);
    const n2 = Number(document.getElementById("nota2").value);

    const media = (n1 + n2) / 2;
    let msg = "";
    if (media >= 6) {
        msg = `O aluno com ${presenca}% de presença está aprovado com ${media.toFixed(2)} de média.`
    } else if (media >= 4 && media < 6) {
        msg = `O aluno com ${presenca}% de preseça está em segunda época, com ${media.toFixed(2)} de média.`
    } else {
        msg = `O aluno com ${presenca}% de presença está reprovado com ${media.toFixed(2)} de média.`;
    }

    // saída
    document.getElementById("resultado").innerText = msg;
}