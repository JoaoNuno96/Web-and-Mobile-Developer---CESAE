import { Component } from '@angular/core';
import { NgFor, NgIf } from '@angular/common';
import { ContadorComponent } from "./contador/contador.component";

@Component({
  selector: 'teste-component',
  standalone: true,
  imports: [NgFor, NgIf, ContadorComponent],
  templateUrl: './testecomponent.component.html',
  styleUrl: './testecomponent.component.scss'
})
export class TestecomponentComponent {


  contador : number = 100;
  // count :number = 0;
  userName : string = "";
  display : boolean = false;
  imageSizeH : number = 250;
  //user info
  listaTelemoveis =
  [
    {
      nome : "IPhone 15",
      preco: 1500,
      cor: "Preto",
      desconto: 8.3,
      source : "https://imagesn-static.nos.pt/imagerm51nb_44838.webp",

      descontoFinal()
      {
        return Math.round(this.preco * this.desconto / 100);
      },

      precoComDesconto()
      {
        return this.preco - this.descontoFinal();
      }
    },
    {
      nome : "Realme GT6",
      preco: 380,
      cor: "Preto",
      desconto: 5.3,
      source : "https://thumb.pccomponentes.com/w-530-530/articles/1084/10840141/1464-realme-gt-6-16-512gb-fluid-silver-libre.jpg",

      descontoFinal()
      {
        return Math.round(this.preco * this.desconto / 100);
      },

      precoComDesconto()
      {
        return this.preco - this.descontoFinal();
      }
    },
    {
      nome : "Huawei P60 Pro",
      preco: 1100,
      cor: "Cinza",
      desconto: 4.3,
      source : "https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/admin-image/phones/p60-pro/rococo-pearl.png",

      descontoFinal()
      {
        return Math.round(this.preco * this.desconto / 100);
      },

      precoComDesconto()
      {
        return this.preco - this.descontoFinal();
      }
    },

    {
      nome : "Xiaomi 14 Ultra",
      preco: 1200,
      cor: "Preto",
      desconto: 7.3,
      source : "https://www.powerplanetonline.com/cdnassets/xiaomi_14_ultra_blanco_01_l.jpg",

      descontoFinal()
      {
        return Math.round(this.preco * this.desconto / 100);
      },

      precoComDesconto()
      {
        return this.preco - this.descontoFinal();
      }
    },

  ]

  //component classes
  botao = "btn btn-outline-success";
  botaoAzul = "btn btn-info";

  showUserInfo(){
    this.display = !this.display;
  }

  changeUserName(obj : any){
    this.userName = obj.target.value;
  }

  // increment(){
  //   this.count++;
  // }
  // decrement(){
  //   if(this.count > 0)
  //   {
  //     this.count--;
  //   }
  // }

  updateValue(valor: number){
    this.contador = valor;
  }

}
