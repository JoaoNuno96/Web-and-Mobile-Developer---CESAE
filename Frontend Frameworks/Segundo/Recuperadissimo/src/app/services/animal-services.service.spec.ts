import { TestBed } from '@angular/core/testing';

import { AnimalServicesService } from './animal-services.service';

describe('AnimalServicesService', () => {
  let service: AnimalServicesService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(AnimalServicesService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
