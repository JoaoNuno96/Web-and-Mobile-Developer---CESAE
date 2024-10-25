import { Component, EventEmitter, Output, Input } from '@angular/core';

@Component({
  selector: 'app-contador',
  standalone: true,
  imports: [],
  templateUrl: './contador.component.html',
  styleUrl: './contador.component.scss'
})
export class ContadorComponent {

  @Output() atualizarDados = new EventEmitter<number>;
  @Input() count : number = 0;

  increment(){
    this.count++;
    this.atualizarDados.emit(this.count);
  }
  decrement(){
    if(this.count > 0)
    {
      this.count--;
      this.atualizarDados.emit(this.count);
    }
  }

}
