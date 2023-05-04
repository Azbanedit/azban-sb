import { Component, OnInit } from '@angular/core';
import { GetClientService } from 'src/app/services/get-client.service';

@Component({
  selector: 'app-todo-producto',
  templateUrl: './todo-producto.component.html',
  styleUrls: ['./todo-producto.component.css']
})
export class TodoProductoComponent implements OnInit {

  serviceClient: GetClientService;

  productsToDo : any;

  constructor(private GetClientService: GetClientService) { 
    this.serviceClient = GetClientService;
  }

  ngOnInit(): void {
    this.getListToProduction();
  }

  getListToProduction()
  {
    this.serviceClient.getProductsToDo().subscribe((resp:any) => {
      this.productsToDo = resp.response
    });
  }

  reportProductList(orderDetailId : number)
  {
    this.serviceClient.checkProductionCloth(orderDetailId).subscribe((resp:any) => {
      window.location.reload();
    });
  }

}
