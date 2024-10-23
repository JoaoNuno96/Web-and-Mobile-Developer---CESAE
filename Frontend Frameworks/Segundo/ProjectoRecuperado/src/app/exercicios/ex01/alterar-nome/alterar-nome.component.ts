import { Component, EventEmitter, Output } from '@angular/core';
import { UsersComponent } from "../users/users.component";
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-alterar-nome',
  standalone: true,
  imports: [UsersComponent,FormsModule],
  templateUrl: './alterar-nome.component.html',
  styleUrl: './alterar-nome.component.scss'
})
export class AlterarNomeComponent {

  @Output() alterarNome = new EventEmitter();
  nome : string = "";

  changeName(event : any){
    this.nome += event.data;
    this.alterarNome.emit(this.nome);
  }

}
