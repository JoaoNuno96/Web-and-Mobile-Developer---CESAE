import { Component } from '@angular/core';
import { AlterarNomeComponent } from "../alterar-nome/alterar-nome.component";
import { FormsModule } from "@angular/forms"
import { AlterarIdadeComponent } from "../alterar-idade/alterar-idade.component";

@Component({
  selector: 'app-users',
  standalone: true,
  imports: [AlterarNomeComponent, FormsModule, AlterarIdadeComponent],
  templateUrl: './users.component.html',
  styleUrl: './users.component.scss'
})
export class UsersComponent {

  userName : string = "Zé Ninguem";
  userAge : number = 50;

  atualizarNome(evento : any){
    this.userName = evento;
  }

  atualizarIdade(evento : any){
    this.userAge = evento;
  }

}
