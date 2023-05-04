import { Component, Input, OnInit, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-order-viwer',
  templateUrl: './order-viwer.component.html',
  styleUrls: ['./order-viwer.component.css']
})
export class OrderViwerComponent implements OnInit {

  @Input() Order : any;
  @Input() ImagesList : Array<string> = new Array<string>();
  @Input() MainImage : string = "";
  @Output() CloseEvent: EventEmitter<boolean> = new EventEmitter();

  constructor() { }

  ngOnInit(): void {
  }

  setMainImage(mainImage : string){
    this.MainImage = mainImage
  }

  closeOrderViwer()
  {
    this.CloseEvent.emit();
  }
}
