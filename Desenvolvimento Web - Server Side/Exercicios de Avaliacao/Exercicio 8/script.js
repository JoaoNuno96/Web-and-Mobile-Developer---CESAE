//Exercicio 8
// Crie em HTML com três botões. A cada botão deve ser associada uma função para alterar a cor de fundo desse elemento para uma cor aleatória. Deverá apenas usar uma função para os 3 botões.


let corBotoes = ["#8e44ad ","#45b39d ","#f5b041","#839192","#922b21","#fcf3cf","#1abc9c"];

function changeColor(botao)
{
    var valorRandom = Math.floor(Math.random() * (corBotoes.length));

    botao.style.backgroundColor = corBotoes[valorRandom];
}