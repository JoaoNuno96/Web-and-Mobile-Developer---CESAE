function message(message)
{
    this.setTimeout(() => {
        var n = document.createElement("div");
        n.classList.add = "alert alert-success";
        n.role = "alert";
        n.innerText = message;
        document.body.appendChild(n);
    }, 1000);
}

function alertFunction(value)
{
    var div = document.createElement("div");
    div.id = "updatePop"
    div.className = "alert alert-success";
    div.role = "alert";
    div.innerHTML = o;

    this.document.getElementById("errors").append(div);

    setTimeout(() => {
        this.document.getElementById("updatePop").remove();
    }, 2000);

}
