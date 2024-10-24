import { Component } from '@angular/core';
import { FormNomeComponent } from "./form-nome/form-nome.component";
import { FormIdadeComponent } from "./form-idade/form-idade.component";

@Component({
  selector: 'app-exercicio1',
  standalone: true,
  imports: [FormNomeComponent, FormIdadeComponent],
  templateUrl: './exercicio1.component.html',
  styleUrl: './exercicio1.component.scss'
})
export class Exercicio1Component {

  mensagem = "";

  nome : string = "Zé Ninguém";
  idade : string = "50";

  atualizarNome(event : any){
    this.nome = event;
  }

  atualizarIdade(event : any){
    this.idade = event;
    this.mensagem = "idade alterada";
  }
}
