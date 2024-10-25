import { Component, EventEmitter, Input, Output } from '@angular/core';
import { FormsModule } from "@angular/forms";

@Component({
  selector: 'app-form-idade',
  standalone: true,
  imports: [FormsModule],
  templateUrl: './form-idade.component.html',
  styleUrl: './form-idade.component.scss'
})
export class FormIdadeComponent {

  @Input() message : string = "";
  @Output() mudarIdade = new EventEmitter();


  idade : string = "";

  atualizarIdade(){
    this.mudarIdade.emit(this.idade);
  }

}
