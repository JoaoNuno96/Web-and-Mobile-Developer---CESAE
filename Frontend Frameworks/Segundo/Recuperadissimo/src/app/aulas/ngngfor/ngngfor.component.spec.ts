import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NgngforComponent } from './ngngfor.component';

describe('NgngforComponent', () => {
  let component: NgngforComponent;
  let fixture: ComponentFixture<NgngforComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NgngforComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NgngforComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
