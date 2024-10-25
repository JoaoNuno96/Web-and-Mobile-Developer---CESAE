import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-ngngfor',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './ngngfor.component.html',
  styleUrl: './ngngfor.component.scss'
})

export class NgngforComponent {

  carro = {
    nome : String, marca : String, cor : String
  }

  listaCarro : Array<{nome : String, marca : String, cor : String}> =
  [
    {
      nome: "Ferrari",
      marca: "Spider",
      cor: "Preto"
    },
    {
      nome: "Porshe",
      marca: "Carra",
      cor: "Cinza"
    }
  ];

}
