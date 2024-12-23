import { RouterLink, Routes } from '@angular/router';
import { NotFoundComponent } from './pages/not-found/not-found.component';
import { TestecomponentComponent } from './testecomponent/testecomponent.component';
import { HomeComponent } from './home/home.component';
import { Exercicio1Component } from './exercicios/exercicio1/exercicio1.component';
import { Exercicio2Component } from './exercicios/exercicio2/exercicio2.component';
import { NgngifAulaComponent } from './aulas/ngngif-aula/ngngif-aula.component';
import { NgngforComponent } from './aulas/ngngfor/ngngfor.component';
import { AnimalComponent } from './animal/animal.component';
import { CicloVidaComponent } from './aulas/ciclo-vida/ciclo-vida.component';
import { OutroComponenteComponent } from './aulas/outro-componente/outro-componente.component';

export const routes: Routes = [
  {
    title: "Home",
    path: "home",
    component: HomeComponent
  },
  {
    title: "Telemoveis",
    path: "telemoveis",
    component: TestecomponentComponent
  },
  {
    title: "Aula - NgIf",
    path: "ngngif",
    component: NgngifAulaComponent
  },
  {
    title: "Aula - NgFor",
    path: "ngngfor",
    component: NgngforComponent
  },
  {
    title: "Aula - Ciclo Vida Do Compomente",
    path: "ciclovida",
    component: OutroComponenteComponent
  },
  {
    title: "Exercicio1",
    path: "exercicio1",
    component: Exercicio1Component
  },
  {
    title: "Exercicio2",
    path: "exercicio2",
    component: Exercicio2Component
  },
  {
    title: "Animal",
    path: "animal",
    component: AnimalComponent
  },
  {
    path: '',
    redirectTo: "/home",
    pathMatch: "full"
  },
  {
    title: "Page Not Found",
    path: '**',
    component: NotFoundComponent
  }
];

// <a href> RouterLink="/home"
