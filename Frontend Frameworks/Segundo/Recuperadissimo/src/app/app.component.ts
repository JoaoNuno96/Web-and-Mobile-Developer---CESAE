import { Component } from '@angular/core';
import { RouterOutlet,RouterLink, RouterLinkActive } from '@angular/router';
import { NavBarComponent } from './nav-bar/nav-bar.component';
import { TestecomponentComponent } from './testecomponent/testecomponent.component';
import { Exercicio1Component } from "./exercicios/exercicio1/exercicio1.component";

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, NavBarComponent, TestecomponentComponent, RouterLink, RouterLinkActive, Exercicio1Component],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss'
})
export class AppComponent {
  title = 'Terceiro';
}
