// let image = document.getElementById("unicorn");
// let heading = document.getElementById("mainheading");

// console.log(image);
// console.log(heading);

// //let i = prompt("Queres adicionar um item?");
// let listaCompras = [];

// if(i.toLowerCase() === "s")
// {
//     //let j = prompt("Queres adicionar uma imagem?");

// }
// else
// {
    
// }

//QUERY SELECTOR

// let doneToDos = document.querySelectorAll(".done");
// let checkbox = document.querySelector("input[type='checkbox']");
// console.log(doneToDo);
// console.log(checkbox);



// let listaCompras = [];


// let answer = prompt("Do you want to add an item? (s/n)");

// if(answer.toLowerCase() === "s")
// {
//     let answer = parseInt(prompt("How many itens?"));

//     for(let i = 0; i<answer;i++)
//     {
//         let elemento = document.createElement("h1");
//         elemento.innerHTML = "Pickles são ";
//         let elementoFilho = document.createElement("span");
//         elementoFilho.innerHTML = " Yack";

//         elemento.appendChild(elementoFilho);
//         listaCompras.push(elemento);
//     }
    
// }
// else
// {
//     console.log("No items selected");
// }
//"https://devsprouthosting.com/images/egg.jpg"
// console.log(listaCompras);
// document.querySelector("h1 span").innerText = "Yack";


// function alterar()
// {
//     let elemento = document.querySelector("img");

//     if(elemento.src === "https://devsprouthosting.com/images/chicken.jpg")
//     {
//         elemento.src = "https://devsprouthosting.com/images/egg.jpg";
//     }
//     else
//     {
//         elemento.src = "https://devsprouthosting.com/images/chicken.jpg";
//     }
// }


// var h1 = document.getElementById("container").s

// document.getElementById("n").style.textAlign = "center";    

var lista = document.querySelectorAll("h1 span");
var colors = ["red","orange","yellow","green","blue","indigo","violet"];

for(var i in lista)
{
    lista[i].style.color = colors[i]
}