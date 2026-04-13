function calcularN(){
    const formulario = document.getElementById("ex05");
    formulario.addEventListener("submit", function(event) {
        event.preventDefault();
    });

    const n = Number(document.getElementById("numero").value);
    let soma = 0;

    // loop de 1 até n
    for(let i=1; i<=n; i++){
        soma += i;
    }
    
    document.getElementById("somaden").innerText = `A soma de 1 até ${n} é: ${soma}`;
}