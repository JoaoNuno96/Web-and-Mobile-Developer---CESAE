import { Component } from '@angular/core';
import { RouterOutlet,RouterLink, RouterLinkActive } from '@angular/router';
import { NavBarComponent } from './nav-bar/nav-bar.component';
import { TestecomponentComponent } from './testecomponent/testecomponent.component';
import { Ex01Component } from "./exercicios/ex01/ex01.component";
import { UsersComponent } from "./exercicios/ex01/users/users.component";

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, NavBarComponent, TestecomponentComponent, Ex01Component, UsersComponent,RouterLink,RouterLinkActive],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss'
})
export class AppComponent {
  title = 'Terceiro';
}
