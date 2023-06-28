import { Component, OnInit } from '@angular/core';
import { Chart, registerables, ChartDataset } from 'chart.js';
import { GetClientService } from '../../services/get-client.service';

@Component({
  selector: 'app-charts',
  templateUrl: './charts.component.html',
  styleUrls: ['./charts.component.css']
})
export class ChartsComponent implements OnInit {

  serviceClient: GetClientService;
  constructor( private GetClientService: GetClientService ){
    this.serviceClient = GetClientService;
  }

  ngOnInit() {
    Chart.register(...registerables);
    var value = localStorage.getItem('azban-login');
    var isLoged = value !== null;
    if(isLoged == false){
      window.location.href = "/#/login";
      return;
    } 

    this.createBarChart();
    this.createLineChart();
    this.createDonutChart();
  }
  
  createBarChart() {
    const order = document.getElementById('orderByState') as HTMLCanvasElement;

    const orderState = new Chart(order, {
      type: 'bar',
      data: {
        labels: /*label,*/['Creado', 'En producción', 'Listo para entrega', 'Enviado', 'Devolución', 'Cancela'],
        datasets: [{
          label: 'Pedidos por estado',
          data: /*data,*/ [12, 19, 8, 15, 7, 6, 5],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1 // Ancho del borde de las barras
        }]
      },
      options: {
        indexAxis: 'y',
      }
    });
    //TOP COLORES
    const colors = document.getElementById('topColors') as HTMLCanvasElement;
    const topColors = new Chart(colors, {
      type: 'bar',
      data: {
        labels:/*label,*/ ['Amarillo', 'Azul', 'Rojo', 'Blanco', 'Negro', 'Lila'],
        datasets: [{
          label: 'Colores más vendidos',
          data: /*data,*/  [12, 19, 8, 15, 7, 6, 5],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1 // Ancho del borde de las barras
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });
  //TALLAS MAS VENDIDAS
  const size = document.getElementById('sizeTop') as HTMLCanvasElement;
    const sizeTop = new Chart(size, {
      type: 'bar',
      data: {
        labels: /*label,*/ ['S', 'M', 'L', 'XL', 'XXL'],
        datasets: [{
          label: 'Tallas más vendidas',
          data: /*data,*/  [12, 19, 8, 15, 7],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)'
          ],
          borderWidth: 1 // Ancho del borde de las barras
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });
  }

  createLineChart(){
    //VENTAS POR MES
    const sales = document.getElementById('salesPerMonth') as HTMLCanvasElement;
    const salesPerMonth = new Chart(sales, {
      type: 'line',
      data: {
        labels: /*label,*/ ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
          label: 'sales per month',
          data: /*data,*/ [65, 59, 80, 81, 56, 55, 40, 20],
          fill: true,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0
        }]
      },
    });
  }

  createDonutChart(){
    //PAGO VS ABONO DE PEDIDO
    const pay = document.getElementById('payment') as HTMLCanvasElement;
    const paymentOfMoney = new Chart(pay, {
      type: 'doughnut',
      data: {
        labels: /*label,*/ ['Pago completo', 'Abono'],
        datasets: [{
          label: 'Pago vs Abono',
          data: /*data,*/ [12, 19],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)'
          ],
          borderWidth: 1 
        }]
      },
    });
  }
 //////////////////////////////
 /*Chart.register(...registerables);
    var value = localStorage.getItem('azban-login');
    var isLoged = value !== null;
    if(isLoged == false){
      window.location.href = "/#/login";
      return;
    } 

    this.serviceClient.reportColors().subscribe((resp : any) =>{
      let label = [];
      let data = []; 
      for (let i = 0; i < resp.length ; i++){
        let color = resp[i].color;
        let quantityOrders = resp[i].quantityOrders;
        label.push(color);
        data.push(quantityOrders);
      }
      this.createBarChart(label, data);
    });

    this.serviceClient.reportSizes().subscribe((resp : any) =>{
      let label = [];
      let data = []; 
      for (let i = 0; i < resp.length ; i++){
        let size = resp[i].size;
        let quantityOrders = resp[i].quantityOrders;
        label.push(size);
        data.push(quantityOrders);
      }
      this.createBarChart(label, data);
    });

    this.serviceClient.reportStates().subscribe((resp : any) =>{
      let label = [];
      let data = []; 
      for (let i = 0; i < resp.length ; i++){
        let state = resp[i].state;
        let quantityOrders = resp[i].quantityOrders;
        label.push(state);
        data.push(quantityOrders);
      }
      this.createBarChart(label, data);
    })

    this.serviceClient.reportPayment().subscribe((resp : any)=>{
      let label = [];
      let data = []; 
      for (let i = 0; i < resp.length ; i++){
        let name = resp[i].name;
        let quantityOrders = resp[i].quantityOrders;
        label.push(name);
        data.push(quantityOrders);
      }
      this.createDonutChart(label, data);
    })

    this.serviceClient.reportSalesMoth().subscribe((resp : any) => {
      let label = [];
      let data = []; 
      for (let i = 0; i < resp.length ; i++){
        let month = resp[i].month;
        let quantityOrders = resp[i].quantityOrders;
        label.push(month);
        data.push(quantityOrders);
      }
      this.createLineChart(label, data);
    });
  }
  
  createBarChart(label : Array<String> , data : Array<Number>) {
    const order = document.getElementById('orderByState') as HTMLCanvasElement;

    const orderState = new Chart(order, {
      type: 'bar',
      data: {
        labels: /*label,['Creado', 'En producción', 'Listo para entrega', 'Enviado', 'Devolución', 'Cancela'],
        datasets: [{
          label: 'Pedidos por estado',
          data: /*data, [12, 19, 8, 15, 7, 6, 5],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1 // Ancho del borde de las barras
        }]
      },
      options: {
        indexAxis: 'y',
      }
    });
    //TOP COLORES
    const colors = document.getElementById('topColors') as HTMLCanvasElement;
    const topColors = new Chart(colors, {
      type: 'bar',
      data: {
        labels:/*label, ['Amarillo', 'Azul', 'Rojo', 'Blanco', 'Negro', 'Lila'],
        datasets: [{
          label: 'Colores más vendidos',
          data: /*data, [12, 19, 8, 15, 7, 6, 5],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1 // Ancho del borde de las barras
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });
  //TALLAS MAS VENDIDAS
  const size = document.getElementById('sizeTop') as HTMLCanvasElement;
    const sizeTop = new Chart(size, {
      type: 'bar',
      data: {
        labels: /*label, ['S', 'M', 'L', 'XL', 'XXL'],
        datasets: [{
          label: 'Tallas más vendidas',
          data: /*data, [12, 19, 8, 15, 7],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)'
          ],
          borderWidth: 1 // Ancho del borde de las barras
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });
  }

  createLineChart(label : Array<String> , data : Array<Number>){
    //VENTAS POR MES
    const sales = document.getElementById('salesPerMonth') as HTMLCanvasElement;
    const salesPerMonth = new Chart(sales, {
      type: 'line',
      data: {
        labels: /*label, ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
          label: 'sales per month',
          data: /*data, [65, 59, 80, 81, 56, 55, 40, 20],
          fill: true,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0
        }]
      },
    });
  }

  createDonutChart(label : Array<String> , data : Array<Number>){
    //PAGO VS ABONO DE PEDIDO
    const pay = document.getElementById('payment') as HTMLCanvasElement;
    const paymentOfMoney = new Chart(pay, {
      type: 'doughnut',
      data: {
        labels: /*label, ['Pago completo', 'Abono'],
        datasets: [{
          label: 'Pago vs Abono',
          data: /*data,[12, 19],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)'
          ],
          borderWidth: 1 
        }]
      },
    });
  }*/
}
