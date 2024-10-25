import { Component, EventEmitter, Output } from '@angular/core';
import {FormsModule} from "@angular/forms";

@Component({
  selector: 'app-form-nome',
  standalone: true,
  imports: [FormsModule],
  templateUrl: './form-nome.component.html',
  styleUrl: './form-nome.component.scss'
})
export class FormNomeComponent {

  @Output() mudarNome = new EventEmitter();

  userName : string = "";

  changeName(){
    this.mudarNome.emit(this.userName);

  }
}
