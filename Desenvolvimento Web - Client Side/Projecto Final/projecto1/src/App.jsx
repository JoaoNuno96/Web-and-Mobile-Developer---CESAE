import {BrowserRouter,Routes,Route} from "react-router-dom";

import Home from "./Pages/Home";
import Sobre from "./Pages/Sobre";
import Contacto from "./Pages/Contato";

function App()
{
  return (
    <div>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Home/>} />
          <Route path="/sobre" element={<Sobre/>} />
          <Route path="/contato" element={<Contacto/>} />
        </Routes>
      </BrowserRouter>
    </div>
  )
}

export default App;