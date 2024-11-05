window.addEventListener("DOMContentLoaded",function(e){

this.setTimeout(() => {
    var n = document.createElement("p");
    n.innerHTML = "Escolhe uma opção, e não demores muito!!";
    n.style.marginLeft = 120;
    e.target.children[0].children[1].append(n);
}, 1000);

this.setTimeout(() => {
    var n = document.createElement("p");
    n.innerHTML = "Ainda não? Fogo indeciso!!";
    n.style.marginLeft = 120;
    n.style.marginTop = 20;
    e.target.children[0].children[1].append(n);
}, 4000);
});
