import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-product-request',
  templateUrl: './product-request.component.html',
  styleUrls: ['./product-request.component.css']
})
export class ProductRequestComponent implements OnInit {

  Productos: Array<any> = [];

  constructor() { }

  ngOnInit(): void {
    this.Productos = [
      {nombre : 'Buzo Capotero', color : 'Rosado', cantidad: 3, talla: 'S'},
      {nombre : 'Buzo Capotero', color : 'Rosado', cantidad: 3, talla: 'S'},
      {nombre : 'Buzo Capotero', color : 'Rosado', cantidad: 3, talla: 'S'},
      {nombre : 'Buzo Capotero', color : 'Rosado', cantidad: 3, talla: 'S'},
      {nombre : 'Buzo Capotero', color : 'Rosado', cantidad: 3, talla: 'S'},
      {nombre : 'Buzo Capotero', color : 'Rosado', cantidad: 3, talla: 'S'},
      {nombre : 'Buzo Capotero', color : 'Rosado', cantidad: 3, talla: 'S'}
    ]
  }

}
