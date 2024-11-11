import { Injectable } from '@angular/core';
import { Animal } from '../models/Animal';
import { HttpClient } from "@angular/common/http";
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AnimalServicesService {

  private animals : Array<Animal> = [];


  constructor(private http : HttpClient){
    console.log("AnimalServicesService.construct()");
   }

   getAnimal() : Observable<Animal[]>{
    return this.http.get<Animal[]>("http://localhost:3000/animais");
   };

   createAnimal(animal : any)
   {
    this.animals.push(animal);
   }
}
