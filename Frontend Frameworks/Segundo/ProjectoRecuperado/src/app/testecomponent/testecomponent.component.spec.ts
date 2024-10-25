import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TestecomponentComponent } from './testecomponent.component';

describe('TestecomponentComponent', () => {
  let component: TestecomponentComponent;
  let fixture: ComponentFixture<TestecomponentComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TestecomponentComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TestecomponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
