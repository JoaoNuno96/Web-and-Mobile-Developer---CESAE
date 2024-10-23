import { Component, EventEmitter, Output } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-alterar-idade',
  standalone: true,
  imports: [FormsModule],
  templateUrl: './alterar-idade.component.html',
  styleUrl: './alterar-idade.component.scss'
})
export class AlterarIdadeComponent {

  @Output() mudarNumero = new EventEmitter();
  idade : string = "";

  changeValue($event : any){
    this.idade += $event.data;
    this.mudarNumero.emit(this.idade);

  }

}
