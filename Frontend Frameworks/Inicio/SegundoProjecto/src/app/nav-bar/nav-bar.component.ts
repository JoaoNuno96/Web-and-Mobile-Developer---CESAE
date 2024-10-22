import { Component } from '@angular/core';

@Component({
  selector: 'app-nav-bar',
  standalone: true,
  imports: [],
  templateUrl: './nav-bar.component.html',
  styleUrl: './nav-bar.component.scss'
})
export class NavBarComponent {

  textColor = "blue";
  textSize = "20px";
  bgColor = "white";

  message = "";

  displayText(){

    this.message = "Quem se atreveu a clicar no meu botão?!"

  }

  colorChange(){
    this.message = "E alterou o meu background também?! Que ousadia!!"
    this.bgColor = "grey"
  }

}
