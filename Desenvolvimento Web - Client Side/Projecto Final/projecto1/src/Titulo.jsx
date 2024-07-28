import { useState } from "react";

function Titulo({cor},)
{
    const[texto,setTexto] = useState("Titulo Inicial");
    const[textoInput,setTextoInput] = useState("");

    function clicou()
    {
        setTexto(textoInput);
    }

    return (
       <div>
         <h1 style={{color:cor}}>{texto}</h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit vero vel dolore expedita laudantium corporis? Praesentium dignissimos quod, odit suscipit cupiditate magnam, itaque, nulla ipsum dolores voluptatibus veniam aliquam ab.</p>
         <input type="text" placeholder="Digite o texto" value={textoInput} onChange={(e) => {setTextoInput(e.target.value)}} />
         <button onClick={clicou}>Mudar</button>
       </div>
    ) 
}

export default Titulo;