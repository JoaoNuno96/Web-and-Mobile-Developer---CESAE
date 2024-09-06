//EXERCICIO 1
//____________________________________________________________
// No teu projecto, no ficheiro JS, cria a seguinte constante
// const word = “skateboard";
// 2. Sem alterar a variável, usa um método que retire a parte ‘board’ da const.
// 3. Usando o método replace, substitua o ‘o’ por e.
// 4. Guarde o resultado numa variável chamada facialHair.
// 5. Faz console.log(facialHair) para verificar se está correcto

const WORD = "skateboard";

var facialhair = WORD.substring(5);

//console.log(facialhair.replace("o","e"));


//EXERCICIO 2
//____________________________________________________________
// Pergunta ao utilizador através do Prompt o primeiro e o último nome (em duas
//     caixas diferentes) e coloque os mesmos em variáveis.
//     Apresenta através de um alert('Olá', nomeDaPessoa);

// let name = prompt("Digite o nome:");
// let lastName = prompt("Digite o apelido:");

// alert(`Olá, ${name} ${lastName}`);

// Exercício 3
//____________________________________________________________

//__________Exercício 3.1
// 3.1. Pergunta ao utilizador através do Prompt que dia da semana é e coloca numa
// variável. Se a resposta for Sexta, apresenta o texto 'yay, sobrevivemos a mais
// uma semana'. Caso contrário, coloca uma mensagem à tua escolha.


// let diaDaSemana = prompt("Que dia da semana é hoje? (sem -feria)");

// if(diaDaSemana.toLowerCase() === "sexta")
// {
//     console.log("yay, sobrevivemos a mais uma semana");
// }
// else
// {
//     console.log("A vida custa quando não é sexta!");
// }

//__________Exercício 3.2
// Através do prompt, peça ao utilizador uma password com pelo menos 6
// caracteres.. Caso a mesma não cumpra as condições, informe o mesmo,
// dizendo que a pass é inválida.

// let pass = prompt("Por favor, digite uma senha com 6 characters:");

// if(pass.length >= 6)
// {
//     console.log("Password cumpriu os requesitos");
// }
// else
// {
//     console.log("Password não cumpriu os requesitos!!");
// }

//__________Exercício 3.3
// 3.3. Repita a alínea 1 usando um Switch / Case e personalizando com várias opções.

// let diaDaSemana = prompt("Que dia da semana é hoje? (sem -feria)");

// switch(diaDaSemana.toLowerCase())
// {
//     case "sexta": 
//         console.log("yay, sobrevivemos a mais uma semana");
//         break;

//     default:
//         console.log("A vida custa quando não é sexta!");
//         break;
// }


//EXERCICIO 4
//____________________________________________________________

// let planetasSistemaSolar = ["Mercúrio", "Vénus", "Terra", "Mart", "Jupiter2", "Saturno", "Urano", "Neptuno", "Plutão"];

// planetasSistemaSolar[3] = "Marte";
// planetasSistemaSolar.pop();
// planetasSistemaSolar.unshift("Soleirao");

// console.log(planetasSistemaSolar);


//EXERCICIO 5
//____________________________________________________________
// No vosso ficheiro JS criem o seguinte array multidimensional com os lugares de
// um avião: (podem encontrar o código na pasta exs do projecto do git).
// No sítio onde existe um lugar vago, assignem o vosso nome. Façam
// console.log() do novo array para confirmar se vos foi atribuído o lugar.

let airplaneSeats = [
    ["Ruth","Anthony","Stevie"],
    ["Amelia","Pedro","Maya"],
    ["Xavier","Ananya","Luis"],
    ["Luis",null,"Deniz"],
    ["Rin","Sakura","Franciso"]
];

airplaneSeats[3][1] = "João";

console.log(airplaneSeats);


//EXERCICIO 6
//____________________________________________________________
// 1. Cria um objecto chamado product com as seguintes propriedades:
// •
// nome e assigna-lhe um nome à tua escolha.
// •
// inStock, como verdadeiro.
// •
// Price com o valor 1.99
// •
// Colors, com um array de vermelho, azul e verde;
// 2. Imprime na consola os seguintes valores:
// •
// Price
// •
// Cor Verde
// 3. Ups, a inflacção chegou à nossa loja. Muda o valor do produto para 2.55

let product = {
    nome: "SmarthPhone",
    inStock: true,
    price: 1.99,
    color: ["vermelhor","azul","verde"]
};

product.price = 2.55;

console.log(product.price);
console.log(product.color[2]);

//EXERCICIO 7
//____________________________________________________________
// Ciclos de Repetições. Ex: escrever 10x 'Hello World', escrever os números de 1 a
// 10; Comentários numa publicação.

for(let i = 0; i<=10;i++)
{
    document.write(`Hello World! x${i} <br />`);
}

//EXERCICIO 8
//____________________________________________________________
// Imprima na página os nomes em letra maiúscula.

let people = ["Scooby", "Velma", "Daphne", "Shaggy", "Fred"];

for(let i in people)
{
    console.log(people[i].toUpperCase());
}


//EXERCICIO 9
//____________________________________________________________
// Lista de Compras

// let codigo = "fim";

// let listaCompras = [];

// while(codigo == "fim")
// {
//     let add = prompt("Digite o Item a adicionar no carrinho:");

//     if(add == "fim")
//     {
//         codigo = "desligar";
//     }
//     else
//     {
//         listaCompras.push(add);
//     }
// }
// listaCompras.pop();
// console.log(listaCompras);


//PAGINA 61 ficamos