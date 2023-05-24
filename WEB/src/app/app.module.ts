import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/shared/header/header.component';
import { FooterComponent } from './components/shared/footer/footer.component';
import { MenuToolsComponent } from './components/shared/menu-tools/menu-tools.component';
import { PedidosComponent } from './components/vistas/pedidos/pedidos.component';
import { FormComponent} from './components/vistas/form/form.component'
import { ItemsComponent } from './components/items/items.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { CommonModule, HashLocationStrategy, LocationStrategy } from '@angular/common';
import { AddressFormComponent } from './components/vistas/address-form/address-form.component';
import { ProductInfoComponent } from './components/vistas/product-info/product-info.component';
import { AddressListComponent } from './components/shared/address-list/address-list.component';
import { HttpClientModule } from '@angular/common/http';
import { ModalMessageComponent } from './components/shared/modal-message/modal-message.component';
import { OrderShipmentDataComponent } from './components/shared/order-shipment-data/order-shipment-data.component';
import { ConfirmationMessageComponent } from './components/shared/confirmation-message/confirmation-message.component';
import { TooltipModule } from '@syncfusion/ej2-angular-popups';
import { ToPrintComponent } from './components/shared/to-print/to-print.component';
import { ChartsComponent } from './components/charts/charts.component';
import { ChartsModule } from 'ng2-charts';
import { InventoryComponent } from './components/inventory/inventory.component';
import { LoaderComponent } from './components/shared/loader/loader.component';
import { PipeFilterOrdersPipe } from './pipes/pipe-filter-orders.pipe';
import { ProductRequestComponent } from './components/shared/product-request/product-request.component';
import { NgxFileDropModule } from 'ngx-file-drop';
import { UploadfileComponent } from './components/shared/uploadfile/uploadfile.component';
import { OrderViwerComponent } from './components/shared/order-viwer/order-viwer.component';
import { TodoProductoComponent } from './components/vistas/todo-producto/todo-producto.component';
import { OrderEditComponent } from './components/vistas/order-edit/order-edit.component';
import { LoginComponent } from './components/vistas/login/login.component';
import { ForgetPasswordComponent } from './components/vistas/forget-password/forget-password.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MenuToolsComponent,
    PedidosComponent,
    FormComponent,
    ItemsComponent,
    AddressFormComponent,
    ProductInfoComponent,
    AddressListComponent,
    ModalMessageComponent,
    OrderShipmentDataComponent,
    ConfirmationMessageComponent,
    ToPrintComponent,
    ChartsComponent,
    InventoryComponent,
    LoaderComponent,
    PipeFilterOrdersPipe,
    ProductRequestComponent,
    UploadfileComponent,
    OrderViwerComponent,
    TodoProductoComponent,
    OrderEditComponent,
    LoginComponent,
    ForgetPasswordComponent
    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule,
    FormsModule,
    CommonModule,
    HttpClientModule,
    TooltipModule,
    ChartsModule,
    NgxFileDropModule
  ],
  providers: [
    {provide: LocationStrategy, useClass: HashLocationStrategy}
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
