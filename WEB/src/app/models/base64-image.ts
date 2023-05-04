export class Base64Image {

    name: string;

    format: string;

    base64: string = "";

    constructor(file : any)
    {
        this.name = file.name;
        this.format = file.type.split('/')[1];

        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => {
            this.base64 = reader.result?.toString().split(',')[1] ?? "";
        };
    }
}