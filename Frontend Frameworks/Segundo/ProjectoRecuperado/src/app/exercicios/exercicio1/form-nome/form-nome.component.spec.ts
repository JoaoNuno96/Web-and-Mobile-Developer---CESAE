import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormNomeComponent } from './form-nome.component';

describe('FormNomeComponent', () => {
  let component: FormNomeComponent;
  let fixture: ComponentFixture<FormNomeComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [FormNomeComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FormNomeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
