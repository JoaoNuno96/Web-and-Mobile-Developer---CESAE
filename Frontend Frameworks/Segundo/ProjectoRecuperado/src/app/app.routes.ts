import { RouterLink, Routes } from '@angular/router';
import { Ex01Component } from './exercicios/ex01/ex01.component';
import { NotFoundComponent } from './pages/not-found/not-found.component';
import { TestecomponentComponent } from './testecomponent/testecomponent.component';

export const routes: Routes = [
  {
    title: "Exercicio 01",
    path: "ex01",
    component: Ex01Component
  },
  {
    title: "Test",
    path: "test",
    component: TestecomponentComponent
  },
  {
    path: '',
    redirectTo: "/test",
    pathMatch: "full"
  },
  {
    title: "Page Not Found",
    path: '**',
    component: NotFoundComponent
  }
];

// <a href> RouterLink="/home"
