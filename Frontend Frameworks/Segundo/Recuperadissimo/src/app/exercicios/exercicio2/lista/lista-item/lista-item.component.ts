import { Component,Input } from '@angular/core';

@Component({
  selector: 'app-lista-item',
  standalone: true,
  imports: [],
  templateUrl: './lista-item.component.html',
  styleUrl: './lista-item.component.scss'
})
export class ListaItemComponent {

  @Input({alias:"dados-planta",required:true}) planta : any = {}

  textInterior : String = "#f1c885";
  textDaFlores : String = "#FF007F"
}
