import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-ngngif-aula',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './ngngif-aula.component.html',
  styleUrl: './ngngif-aula.component.scss'
})
export class NgngifAulaComponent {

  valor : number = -2;

}
