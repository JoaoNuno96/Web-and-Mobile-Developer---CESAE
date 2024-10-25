import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormIdadeComponent } from './form-idade.component';

describe('FormIdadeComponent', () => {
  let component: FormIdadeComponent;
  let fixture: ComponentFixture<FormIdadeComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [FormIdadeComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FormIdadeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
