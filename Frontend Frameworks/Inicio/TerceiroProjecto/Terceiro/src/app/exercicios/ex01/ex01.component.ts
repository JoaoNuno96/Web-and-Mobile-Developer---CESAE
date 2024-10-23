import { Component } from '@angular/core';
import { UsersComponent } from "./users/users.component";

@Component({
  selector: 'app-ex01',
  standalone: true,
  imports: [UsersComponent],
  templateUrl: './ex01.component.html',
  styleUrl: './ex01.component.scss'
})
export class Ex01Component {

}
