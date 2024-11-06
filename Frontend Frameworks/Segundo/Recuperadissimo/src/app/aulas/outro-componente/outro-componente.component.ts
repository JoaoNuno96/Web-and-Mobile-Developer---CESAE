import { Component } from '@angular/core';
import { CicloVidaComponent } from '../ciclo-vida/ciclo-vida.component';

@Component({
  selector: 'app-outro-componente',
  standalone: true,
  imports: [CicloVidaComponent],
  templateUrl: './outro-componente.component.html',
  styleUrl: './outro-componente.component.scss'
})
export class OutroComponenteComponent {
  contagem = 100;

  atualizar(valor: any) {
    this.contagem = valor;
  }
}
