//Exercicio 6
// Crie um botão no index.html com o texto ‘Diz-me o teu nome e dir-te-ei olá’. Ao clicar nesse
// botão, é despoletado uma caixa de texto perguntar o nome ao utilizador. Quando o user
// responde, é lançado um alerta a dizer ‘olá, nome do User’.

document.getElementById("botaoAprender").addEventListener("click",()=>{
    let name = document.getElementById("valoresEnviados").value;

    if(name == "")
    {
        alert(`Olá, seu desconhecido!`);
    }
    else
    {
        alert(`Olá, ${name}!`);
    }
    
})