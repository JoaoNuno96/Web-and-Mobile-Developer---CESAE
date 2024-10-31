import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListaitemAnimalComponent } from './listaitem-animal.component';

describe('ListaitemAnimalComponent', () => {
  let component: ListaitemAnimalComponent;
  let fixture: ComponentFixture<ListaitemAnimalComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ListaitemAnimalComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListaitemAnimalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
