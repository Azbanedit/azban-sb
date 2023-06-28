import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http'
import { Client } from '../models/client';
import { Address } from '../models/address';
import { Product } from '../models/product';
import { Order } from '../models/order';
import { Login } from '../models/login';

@Injectable({
  providedIn: 'root'
})
export class GetClientService {
  
  //_url = 'https://localhost:44347/api/'//'http://localhost/azban-api/api/'// 
  _url = 'https://azban-buzos-api.azurewebsites.net/api/'
  _url2 = 'https://demo1089139.mockable.io/'

  constructor( private http: HttpClient )
  { 
    console.log("Services")
  }

  reportColors(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let getColorReport = this._url + 'Report/Color';
    return this.http.get(getColorReport , { headers: header});
  }

  reportSizes(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let getSizeReport = this._url + 'Report/Size';
    return this.http.get(getSizeReport , { headers: header});
  }

  reportStates(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let getStateReport = this._url + 'Report/State';
    return this.http.get(getStateReport , { headers: header});
  }

  reportPayment(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let getPayReport = this._url + 'Report/Payment';
    return this.http.get(getPayReport , { headers: header});
  }

  reportSalesMoth(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let getSalesReport = this._url + 'Report/Sales';
    return this.http.get(getSalesReport , { headers: header});
  }

  login(login: Login){
    let postUser = this._url + 'User/Login';
    return this.http.post( postUser , login);
  }
  
  getData(idDocumentType: number , document: string){
    
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetClient = this._url + 'Client/GetClient/' + idDocumentType + '/' + document;
    
    return this.http.get(urlGetClient, { headers: header });
  }

  getOrderById(orderId: number) {
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetOrder = this._url + 'Order/GetOrderById/' + orderId ;
    
    return this.http.get(urlGetOrder, { headers: header });
  }

  getProductList(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetProduct = this._url + 'Product/GetProductList/' ;
    
    return this.http.get(urlGetProduct, { headers: header });
  }

  getListsTransversal(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetLists = this._url + 'Transversal/GetLists' ;
    
    return this.http.get(urlGetLists, { headers: header });
  }
  
  getOrderStates(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetState = this._url + 'Order/GetStates/' ;
    
    return this.http.get(urlGetState, { headers: header });
  }

  getChangeState(id: number, newStateId : number){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetChangeState = this._url + 'Order/ChangeState/' + id + '/' + newStateId;

    return this.http.get(urlGetChangeState, { headers: header})
  }

  ChangeOrderAddress(orderId: number, addressId : number){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetChangeState = this._url + 'Order/ChangeAddress/' + orderId + '/' + addressId;

    return this.http.get(urlGetChangeState, { headers: header})
  }

  getOrdersInProcess(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetOrders = this._url + 'Order/GetInProccessOrders/' ;
    
    return this.http.get(urlGetOrders, { headers: header });
  }

  getProductsToDo(){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let urlGetOrders = this._url + 'Order/GetProductsToDo/' ;
    
    return this.http.get(urlGetOrders, { headers: header });
  }

  createOrUpdateClient(client : Client){
    let postClient = this._url + 'Client/CreateOrUpdate';

    return this.http.post( postClient, client);
  }  

  addAddressToClient( address : Address , id : number ){
    let postAddress = this._url + 'Client/AddAddress/' + id
     
    return this.http.post( postAddress, address );
  }

  loginByOrder(product: Product){
    let postOrder = this._url + 'login/order';
    return this.http.post( postOrder, product);
  }
  
  createOrder(order : Order){
    let postCreateOrder = this._url + 'Order/CreateOrder';
    return this.http.post(postCreateOrder, order )
  }

  payOrder(orderId : number){
    
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let postPayOrder = this._url + 'Order/PayOrder/' + orderId;
    
    return this.http.get(postPayOrder, { headers: header });
  }

  checkProductExist(idDetallePedido: number, productBaseExist: boolean) {
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let getCheckProduct = this._url + 'Order/SetBaseProductExist/' + idDetallePedido + '/' + productBaseExist;
    return this.http.get(getCheckProduct, { headers: header });
  }

  checkProductionCloth(idDetallePedido: number) {
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let getCheckProduct = this._url + 'Order/SetProductionCloth/' + idDetallePedido;
    return this.http.get(getCheckProduct, { headers: header });
  }

  checkstampInProduction(idDetallePedido: number, check2: boolean ){
    let header = new HttpHeaders().set('Type-content', 'aplication/json');
    let getCheckStamp = this._url + 'Order/StampInProduction/' + idDetallePedido + '/' + check2;
    return this.http.get(getCheckStamp, { headers: header });
  }
}
