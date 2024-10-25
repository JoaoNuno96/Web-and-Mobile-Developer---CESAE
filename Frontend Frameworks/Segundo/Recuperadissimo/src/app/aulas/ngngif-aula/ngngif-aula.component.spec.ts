import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NgngifAulaComponent } from './ngngif-aula.component';

describe('NgngifAulaComponent', () => {
  let component: NgngifAulaComponent;
  let fixture: ComponentFixture<NgngifAulaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NgngifAulaComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NgngifAulaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
