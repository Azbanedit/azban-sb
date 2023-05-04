import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Address } from 'src/app/models/address';
import { Color } from 'src/app/models/color';
import { Product } from 'src/app/models/product';
import { GetClientService } from 'src/app/services/get-client.service';

@Component({
  selector: 'app-order-edit',
  templateUrl: './order-edit.component.html',
  styleUrls: ['./order-edit.component.css']
})
export class OrderEditComponent implements OnInit {

  orderId: number = 0;
  showOrder: boolean = false;
  addProduct: boolean = false;
  editAddress: boolean = false;
  order: any = {};
  address: Address;
  addressData : FormGroup;
  departmentList: Array<any> = [];
  
  serviceClient: GetClientService;
  productList: Array<any> = [];
  sizeList: Array<any> = [];
  genderList: Array<any> = [];
  colorList: Array<Color> = [];
  colorSelectedId: number = 0;
  colorBgButton: string ='';
  buttonCreateOrderDisable: boolean = false;
  showButtonCreate: boolean = false;
  datosCard: Array<Product> =[];
  showForm2: boolean = true;

  productForm = new FormGroup ({
    product: new FormControl('nv',[Validators.required, Validators.pattern(/^-?(0|[1-9]\d*)?$/)]),
    gender: new FormControl('nv',[Validators.required, Validators.pattern(/^-?(0|[1-9]\d*)?$/)]),
    size: new FormControl('nv',[Validators.required, Validators.pattern(/^-?(0|[1-9]\d*)?$/)]),
    quantity: new FormControl('',[Validators.required, Validators.pattern(/^-?([1-9]\d*)?$/)]),
    stamp: new FormControl(),
    secondaryStamp: new FormControl(),
    observations: new FormControl()
  });
  
  constructor(private GetClientService: GetClientService) {
    this.serviceClient = GetClientService;

    this.address = new Address();
    this.addressData = this.defineForm();
   }

   searchOrderById(){
     console.log('funcionando');
    this.serviceClient.getOrderById(this.orderId).subscribe((resp: any) => {
      this.order = resp.response;
      this.showOrder = true;
      this.addProduct = false;
      this.editAddress = false;
    });
   }

   activeAddProduct(){
     this.addProduct = true;
     this.editAddress = false;
   }

   activeEditAddress(){
    this.serviceClient.getListsTransversal().subscribe((resp: any) => {
      this.departmentList = resp.response.departments;
    });

    this.addProduct = false;
    this.editAddress = true;
   }

   defineForm() 
   {
     return new FormGroup({
       addresse: new FormControl('', [Validators.required,Validators.maxLength(25), Validators.minLength(10)]),
       address: new FormControl('',[Validators.required, Validators.minLength(5)]),
       phoneAddresse:new FormControl('',[Validators.required,Validators.minLength(10), Validators.pattern(/^-?(0|[1-9]\d*)?$/)]),
       department:new FormControl('nv',[Validators.required, Validators.pattern(/^-?(0|[1-9]\d*)?$/)]),
       city: new FormControl('',[Validators.required, Validators.minLength(4)]),
     });
   }

   addAddress(){
    
    this.address.addresse = this.addressData.controls.addresse.value; 
    this.address.addressePhone = this.addressData.controls.phoneAddresse.value; 
    this.address.address = this.addressData.controls.address.value;
    this.address.departmentId = this.addressData.controls.department.value;
    this.address.city = this.addressData.controls.city.value;

    this.serviceClient.addAddressToClient(this.address, this.order.clientId).subscribe((resp : any)=>{
      if (resp.response > 0)
      {
        this.serviceClient.ChangeOrderAddress(this.order.id, resp.response).subscribe((resp : any ) => {
          console.log('Order Address Changed');
        });
      }
      else {
        console.log('Order Address Change Had Failed');
      }
    });
  }

  

  ngOnInit(): void {
    this.serviceClient.getProductList().subscribe((resp: any) => {
      this.productList = resp.response;
    });
  }

  onProductSelect(){
    let selectedId = this.productForm.controls.product.value;
    
    for (let index = 0; index < this.productList.length; index++)
    {
      console.log("Ingresa a la lista id" + selectedId);
      if (selectedId == this.productList[index].id)
      {
        console.log("Ingresa a la lista");
        this.genderList = this.productList[index].genders;
        this.sizeList = this.productList[index].sizes;

        // Instanciar el array colorList sin items
        this.colorList = new Array<Color>();
        // Recorrer el array colores del producto seleccionado
        for (let i = 0; i < this.productList[index].colors.length; i++) 
        {
          // Por cada color se debe crear un objeto de tipo Color
          let newColor = new Color();
          newColor.id = this.productList[index].colors[i].id;
          newColor.color = this.productList[index].colors[i].color;
          newColor.index = this.productList[index].colors[i].hexRef;

          console.log('Id del color' + newColor.id)
            // Se debe hacer push de ese objecto color al array colorList
          this.colorList.push(newColor);
        }  
      }
    }
    // Cambiar de producto y obtener el id del producto seleccionado
    // 
  }

  selectColor(colorId: number, colorIndex: string){
    this.colorSelectedId = colorId;
    console.log(this.colorSelectedId)
    this.colorBgButton = colorIndex;
  }

  addCard(){
    let product = new Product();
    product.cantidad = this.productForm.controls.quantity.value;
    product.estampado = this.productForm.controls.stamp.value;
    product.estampadoSecundario = this.productForm.controls.secondaryStamp.value;
    product.observaciones = this.productForm.controls.observations.value;
    product.genero = this.productForm.controls.gender.value;
    let productId = this.productForm.controls.product.value;
    let genderId = this.productForm.controls.gender.value;
    
    this.buttonCreateOrderDisable = false;
    for (let index = 0; index < this.genderList.length; index++) 
    {
      if (genderId == this.genderList[index].id) {
        product.genero = this.genderList[index].gender;
        product.idGenero = this.genderList[index].id;
      }
    }

    for (let index = 0; index < this.productList.length; index++)
    {
      if (productId == this.productList[index].id) {

        product.producto = this.productList[index].name;
        product.idProducto = this.productList[index].id

        let sizeId = this.productForm.controls.size.value;

        for(let s = 0; s < this.productList[index].sizes.length; s++){

          if (sizeId == this.productList[index].sizes[s].id) {
           
            product.talla = this.productList[index].sizes[s].size;
            product.idTalla = this.productList[index].sizes[s].id;
          }
        }


        for(let c = 0; c < this.productList[index].colors.length; c++){
          if (this.colorSelectedId == this.productList[index].colors[c].id){
            product.color.color = this.productList[index].colors[c].color;
            product.color.id = this.productList[index].colors[c].id;
            product.color.index = this.productList[index].colors[c].hexRef;

          }
        }
      } 
    }
    
    this.datosCard.push(product);
    this.productForm.reset();
    this.productForm.controls.size.setValue('nv');
    this.productForm.controls.product.setValue('nv');
    this.productForm.controls.gender.setValue('nv');
    this.colorBgButton = '';
    this.colorSelectedId = 0;
    this.showButtonCreate = true;
    console.log('Pruba datos card' + this.datosCard)

  }
}
