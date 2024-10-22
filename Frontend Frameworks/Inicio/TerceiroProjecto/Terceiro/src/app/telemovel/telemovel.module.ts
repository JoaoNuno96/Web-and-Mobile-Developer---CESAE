import { Injectable, NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';



@NgModule({
  declarations: [],
  imports: [
    CommonModule,Injectable
  ]
})

@Injectable()
export class TelemovelModule {

  name : string;
  preco : number;
  cor : string;
  desconto : number;

 }
