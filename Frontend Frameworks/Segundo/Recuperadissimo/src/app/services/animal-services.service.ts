import { Injectable } from '@angular/core';
import { Animal } from '../models/Animal';
import { HttpClient } from "@angular/common/http";

@Injectable({
  providedIn: 'root'
})
export class AnimalServicesService {

  private animals : Array<Animal> = [];


  constructor(private http : HttpClient){
    console.log("AnimalServicesService.construct()");
   }

   getAnimal() : Promise<Animal[]>{
    return new Promise<Animal[]>((result,reject)=>{
      this.http.get<Animal[]>("http://localhost:3000/animais").subscribe((animais : Animal[]) => { console.log("api:",animais) },(error)=>{});
    })
   }

   createAnimal(animal : any)
   {
    this.animals.push(animal);
   }
}
