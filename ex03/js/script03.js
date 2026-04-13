function calcularRetangulo(){
    const formulario = document.getElementById("ex03");
    formulario.addEventListener("submit", function(event){
        event.preventDefault();
    });

    // pegando base e altura
    const base = Number(document.getElementById("base").value);
    const altura = Number(document.getElementById("altura").value);

    // calculando area e perimetro
    const area = base * altura;
    const perimetro = 2 * (base + altura);

    // saída e conexao com o botão
    document.getElementById("area").innerText = `${area.toFixed(2)} m².`;
    document.getElementById("perimetro").innerText = `${perimetro.toFixed(2)} m.`
};