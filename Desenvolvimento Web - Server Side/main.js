// ------------------------- EXERCÍCIOS AULA2 ----------------------------

//EXER 1 
const WORD = "skateboard";

let facialHair = WORD.slice(5, 10); // Cortar da posição 5 à 10, vai ser guardado board na variável
facialHair = facialHair.replace("o", "e"); // Substituir letras na palavra
console.log(facialHair);




//EXER 2 
let diaSemana = prompt("Qual o dia da semana?").toLowerCase(); // Colocar em minusculas
switch(diaSemana){
    case "sexta":
    alert("Yay sobrevivemos a mais uma semana!");
    break;

    default:
    alert("Não é sexta!");
}

let pw = prompt("Insira uma password com 6 caracteres no minimo");
if(pw != null && pw.length > 5){
    alert("Success!!")
}
else{
    alert("Incorrect Password!")
}



//EXER 3
let planetas = [ "Mercúrio", "Vénus", "Terra", "Mart", "Jupiter", "Saturno", "Urano", "Neptuno", "Plutão"];
planetas[3] = "Marte"; // Alterar posição específica no Array
planetas.pop(); // Retirar elemento do fim do Array
planetas.unshift("New"); // Acrescentar elemento ao início do Array
console.log(planetas);



//EXER 4
const airplaneSeats = [
    ['Ruth', 'Anthony', 'Stevie'],
    ['Amelia', 'Pedro', 'Maya'],
    ['Xavier', 'Ananya', 'Luis'],
    ['Luke', null, 'Deniz'],
    ['Rin', 'Sakura', 'Francisco']
];

airplaneSeats[3][1] = "Joaquim";
console.log(airplaneSeats);




//EXER 5
let product = {
    nome: "PC",
    inStock: true,
    Price: 1.99,
    Colors: ["vermelho", "azul", "verde"],
}

console.log(product.Price);
console.log(product.Colors[2]);
product.Price = 2.55;




//EXER 6
const people = ["Scooby", "Velma", "Daphne", "Shaggy", "Fred"];

for(let i=0; i<people.length; i++){
    console.log(people[i].toUpperCase())
}

// ---------------------------------------------------------------------------------------------------------------------------------------





// -------------------------- MATÉRIA AULA2 -------------------------------
//PROMPT E TYPEOF
let myName = prompt("Qual o seu nome?");
console.log(typeof(myName)); // Função para descobrir o tipo de variável


//ARRAYS
let series = ["Lost", "Friends", "Dark", "Breaking Bad", "House of Dragons", "The Bear", "Station 11"];
series[1] = "DragonBall"

series.push("GOT"); //Adicionar ao fim do array uma série
series.unshift("Halt and Catch Fire"); //Adicionar ao início do array uma série

console.log(series);


//ARRAYS BIDIMENSIONAIS
let moreCourses = [
    ["Apis", "DOM", ["JS", "C"]],
    ["CSS", "HTML"],
    "Algoritmia",
    true,
    16,
    "Android"
];

//Aceder à posição do ArrayBidiomensional courses[1][1] = HTML

//OBJECT LITERALS
let JS = {
    avaliação : ["Teste", "Exame"],
    formador : "Sara monteiro",
    sala : 6,
    horas : 50,
    ferias : true,
}

console.log("A avaliação é " + JS.avaliação);
console.log("A formadora é " + JS.formador);

//LOOP FOR EM ARRAY
let movies = [ "Mercúrio", "Vénus", "Terra", "Mart", "Jupiter", "Saturno", "Urano", "Neptuno", "Plutão"];

for(let i=0; i<movies.length; i++){
    console.log(movies[i])
}

// ------------------------------------------------------------------------