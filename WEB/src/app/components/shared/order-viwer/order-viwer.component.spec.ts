import { ComponentFixture, TestBed } from '@angular/core/testing';

import { OrderViwerComponent } from './order-viwer.component';

describe('OrderViwerComponent', () => {
  let component: OrderViwerComponent;
  let fixture: ComponentFixture<OrderViwerComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ OrderViwerComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(OrderViwerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
