import { Component,Input,Output,EventEmitter, SimpleChanges } from '@angular/core';

@Component({
  selector: 'app-ciclo-vida',
  standalone: true,
  imports: [],
  templateUrl: './ciclo-vida.component.html',
  styleUrl: './ciclo-vida.component.scss'
})
export class CicloVidaComponent {
  @Output() mudancaNoContador = new EventEmitter();
  @Input() aux: number = 0;

  constructor() {
    console.log('ContadorComponent.constructor()');
  }

  ngOnChanges(changes : SimpleChanges) {
    console.log('ContadorComponent.ngOnChanges()',changes);

    if(changes["aux"] && changes["aux"].currentValue >= 110)
    {
      this.aux = changes["aux"].previousValue;
      this.mudancaNoContador.emit(this.aux);
    }
  }

  ngOnInit() {
    console.log('ContadorComponent.ngOnInit()');
  }

  ngOnDestroy() {
    console.log('ContadorComponent.ngOnDestroy()');
  }

  incrementar() {
    this.aux++;
    this.mudancaNoContador.emit(this.aux);
  }

  decrementar() {
    this.aux--;
    this.mudancaNoContador.emit(this.aux);
  }
}
