import { Injectable } from '@angular/core';
// import { Animal } from '../models/animal';
import { Animal } from '../../models/Animal';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root',
})
export class AnimaisService {
  private animais: Array<Animal> = [];

  constructor(private http: HttpClient) {
    console.log('AnimaisService.constructor()');
  }

  getAnimais(): Promise<Animal[]> {
    return new Promise<Animal[]>((resolve, reject) => {
      this.http.get<Animal[]>('http://localhost:3000/animais').subscribe(
        (animais: Animal[]) => {
          console.log('api:', animais);
        },
        (error) => {
        }
      );
    });
  }

  createAnimal(animal: any) {
    this.animais.push(animal);
  }
}
