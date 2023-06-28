import { Component, OnInit, Output, EventEmitter, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-to-print',
  templateUrl: './to-print.component.html',
  styleUrls: ['./to-print.component.css']
})

export class ToPrintComponent implements OnInit {

  @Output() ClosePreviewPrintEvent: EventEmitter<boolean> = new EventEmitter();
  @Input() PrintData: Array<any> = [];

  constructor() { }

  ngOnInit(): void {
    var value = localStorage.getItem('azban-login');
    var isLoged = value !== null;
    if(isLoged == false){
      window.location.href = "/#/login";
      return;
    } 
  }

  closePreview(){
    this.ClosePreviewPrintEvent.emit();
  }
}
