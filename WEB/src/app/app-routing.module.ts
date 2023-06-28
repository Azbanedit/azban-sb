import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PedidosComponent } from './components/vistas/pedidos/pedidos.component';
import {FormComponent} from './components/vistas/form/form.component';
import { AddressFormComponent } from './components/vistas/address-form/address-form.component';
import { ProductInfoComponent } from './components/vistas/product-info/product-info.component';
import { AddressListComponent  } from './components/shared/address-list/address-list.component';
import { ModalMessageComponent } from './components/shared/modal-message/modal-message.component';
import { OrderShipmentDataComponent } from './components/shared/order-shipment-data/order-shipment-data.component';
import { ConfirmationMessageComponent } from './components/shared/confirmation-message/confirmation-message.component';
import { ToPrintComponent } from './components/shared/to-print/to-print.component';
import { ChartsComponent } from './components/charts/charts.component';
import { InventoryComponent } from './components/inventory/inventory.component';
import { LoaderComponent } from './components/shared/loader/loader.component';
import { ProductRequestComponent } from './components/shared/product-request/product-request.component';
import { OrderEditComponent } from './components/vistas/order-edit/order-edit.component';
import { LoginComponent } from './components/vistas/login/login.component';
import { ForgetPasswordComponent } from './components/vistas/forget-password/forget-password.component';

//const domain : string = 'http://localhost:4200/';
//const index : string = 'https://azban-buzos.azurewebsites.net/';s
const index : string = '';

const routes: Routes = [
  { path: index+'order-edit', component: OrderEditComponent },
  { path: index+'vista-pedidos', component: PedidosComponent },
  { path: index+'', component: PedidosComponent },
  { path: index+'crear-pedido', component: FormComponent },
  { path: index+'address-form', component: AddressFormComponent},
  { path: index+'product-info', component: ProductInfoComponent },
  { path: index+'address-list', component: AddressListComponent},
  { path: index+'modal-message', component: ModalMessageComponent},
  { path: index+'order-shipment-data', component: OrderShipmentDataComponent},
  { path: index+'confirmation-message', component: ConfirmationMessageComponent},
  { path: index+'to-print', component: ToPrintComponent},
  { path: index+'charts', component: ChartsComponent},
  { path: index+'inventory', component: InventoryComponent},
  { path: index+'loader', component: LoaderComponent},
  { path: index+'product-request', component: ProductRequestComponent},
  { path: index+'login', component: LoginComponent},
  { path: index+'forget-password', component: ForgetPasswordComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
