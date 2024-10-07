//OBJECTO FRUTA
class Fruta{
    constructor(n,q){
        this.nome = n;
        this.quantidade = q;
    }

    details(){
        return "Nome: " + this.nome + " Quantidade: " + this.quantidade;
    }

}

var listaFrutas = [];


//EVENTO DE BOTAO SUBMETER
document.querySelector("form").addEventListener("submit",function(e){

    e.preventDefault();

    var nome = document.getElementById("nomeFruta").value;
    var qnt = document.getElementById("quantidadeFruta").value;

    createFruit(nome,qnt);

    reset();

})


//CRIAR ELEMENTOS
function createFruit(n,q)
{
    //GUARDAR ARRAY
    var fruta = new Fruta(n,q);
    listaFrutas.push(fruta);

    //HTML
    var x = document.createElement("li");
    x.innerHTML = fruta.details();
    document.getElementById("lista").append(x);


}

//RESET DATA
function reset()
{
    document.getElementById("nomeFruta").value = "";
    document.getElementById("quantidadeFruta").value = "";
}
