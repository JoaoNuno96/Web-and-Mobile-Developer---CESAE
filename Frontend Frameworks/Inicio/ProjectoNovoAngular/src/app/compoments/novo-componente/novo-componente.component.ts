import { Component } from '@angular/core';

@Component({
  selector: 'app-novo-componente',
  standalone: true,
  imports: [],
  templateUrl: './novo-componente.component.html',
  styleUrl: './novo-componente.component.scss'
})
export class NovoComponenteComponent {
  meuNome = "João";
  mensagem = "Eu adoro gatos!";
  idade = 60;
}
