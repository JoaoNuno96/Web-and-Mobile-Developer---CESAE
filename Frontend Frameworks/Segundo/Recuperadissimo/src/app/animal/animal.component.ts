import { Component } from '@angular/core';
import { ListaAnimaisComponent } from "../lista-animais/lista-animais.component";
import { AnimalServicesService } from '../services/animal-services.service';
import { Animal } from '../models/Animal';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-animal',
  standalone: true,
  imports: [ListaAnimaisComponent],
  providers: [HttpClient],
  templateUrl: './animal.component.html',
  styleUrl: './animal.component.scss'
})
export class AnimalComponent {

  animais : Array<any> = [];

  constructor(private animalsServices: AnimalServicesService){
    // this.animais = animalsServices.getAnimal();
    console.log(this.animais);
  }

  onclickAdd(){

    const animal: Animal = {
      id: 101,
      nome: "Caril",
      especie: "gato",
      dataNascimento: "2018-06-25",
      cor: "amarelado"
    }
    this.animalsServices.createAnimal(animal);
  }

  ngOnInit(){
    this.animalsServices.getAnimal().subscribe({
      next: (data) => {
        this.animais = data;
      },
      error: (erro) =>{
        console.error("Algo deu errado:", erro);
      }
    });
  }



}
