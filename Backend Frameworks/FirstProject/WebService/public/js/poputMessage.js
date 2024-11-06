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
