import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { NovoComponenteComponent } from "./compoments/novo-componente/novo-componente.component";

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, NovoComponenteComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss'
})
export class AppComponent {
  title = 'ProjectoNovoAngular';
}
