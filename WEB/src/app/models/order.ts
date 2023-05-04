import { Base64Image } from "./base64-image";
import { ProductsOrder } from "./products-to-order";

export class Order {
    id: number;
    clientId: number;
    paymentMethodId: number;
    addressId: number;
    discount: number;
    totalPrice: number;
    deposit: number;
    deposited: boolean;
    paidOut: boolean;
    products: Array<ProductsOrder>;
    images: Array<Base64Image> | undefined;

    constructor(){
        this.id = 0;
        this.clientId = 0;
        this.paymentMethodId = 0;
        this.addressId = 0;
        this.discount = 0;
        this.totalPrice = 0;
        this.deposit = 0;
        this.deposited = true;
        this.paidOut = true;
        this.products = [];
    }
}

