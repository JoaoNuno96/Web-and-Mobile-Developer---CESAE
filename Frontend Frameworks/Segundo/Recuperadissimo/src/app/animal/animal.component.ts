import { Component } from '@angular/core';
import { ListaAnimaisComponent } from "../lista-animais/lista-animais.component";

@Component({
  selector: 'app-animal',
  standalone: true,
  imports: [ListaAnimaisComponent],
  templateUrl: './animal.component.html',
  styleUrl: './animal.component.scss'
})
export class AnimalComponent {

  animais : Array<any> = [
    {
        id: 1,
        nome: 'Rex',
        especie: 'cão',
        dataNascimento: '2018-05-12',
        cor: 'marrom'
    },
    {
        id: 2,
        nome: 'Mia',
        especie: 'gato',
        dataNascimento: '2020-03-15',
        cor: 'preto'
    },
    {
        id: 3,
        nome: 'Bolt',
        especie: 'cão',
        dataNascimento: '2019-07-22',
        cor: 'branco'
    },
    {
        id: 4,
        nome: 'Luna',
        especie: 'gato',
        dataNascimento: '2021-01-30',
        cor: 'cinza'
    },
    {
        id: 5,
        nome: 'Fido',
        especie: 'cão',
        dataNascimento: '2017-11-05',
        cor: 'caramelo'
    },
    {
        id: 6,
        nome: 'Nina',
        especie: 'gato',
        dataNascimento: '2019-09-20',
        cor: 'tigrado'
    },
    {
        id: 7,
        nome: 'Max',
        especie: 'cão',
        dataNascimento: '2020-02-14',
        cor: 'preto e branco'
    },
    {
        id: 8,
        nome: 'Bella',
        especie: 'gato',
        dataNascimento: '2018-06-25',
        cor: 'branco'
    }
];

}