//Exercicio 8
// Crie em HTML com três botões. A cada botão deve ser associada uma função para alterar a cor de fundo desse elemento para uma cor aleatória. Deverá apenas usar uma função para os 3 botões.


function changeColor(cor)
{
    document.getElementById("square").style.backgroundColor = cor;
}