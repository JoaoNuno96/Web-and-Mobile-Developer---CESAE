//Exercicio 9,10,11
// Crie em HTML com três botões. A cada botão deve ser associada uma função para alterar a cor de fundo desse elemento para uma cor aleatória. Deverá apenas usar uma função para os 3 botões.

//Apenas cria botoes uma vez
let onlyOneTime = true;

let texto = document.getElementById("text");

function apresentarTexto()
{
    if(onlyOneTime)
    {
        texto.innerText = "É só mais um esforço e a seguir serie um programador de renome."

        let botaoAumentaTamanho = document.createElement("button");
        botaoAumentaTamanho.id = "botaoTamanho";
        botaoAumentaTamanho.classList.add("btn");
        botaoAumentaTamanho.classList.add("btn-success");
        botaoAumentaTamanho.innerText = "Aumenta texto";
    
        botaoAumentaTamanho.addEventListener("click",function(){
            texto.style.fontSize = "x-large";
            texto.classList.remove("text-start");
            texto.classList.remove("text-end");
            texto.classList.add("text-center");
        })
        
    
        let botaoDiminuiTamanho = document.createElement("button");
        botaoAumentaTamanho.id = "botaoReducao";
        botaoDiminuiTamanho.classList.add("btn");
        botaoDiminuiTamanho.classList.add("btn-danger");
        botaoDiminuiTamanho.innerText = "Diminui texto";
    
        botaoDiminuiTamanho.addEventListener("click",function(){
            texto.style.fontSize = "x-small";
            texto.classList.remove("text-start");
            texto.classList.remove("text-center");
            texto.classList.add("text-end");
        })
    
        document.getElementById("sendToButtonContainer").appendChild(botaoAumentaTamanho);
        document.getElementById("sendToButtonContainer").appendChild(botaoDiminuiTamanho);
        onlyOneTime = false;
    }
    


}
