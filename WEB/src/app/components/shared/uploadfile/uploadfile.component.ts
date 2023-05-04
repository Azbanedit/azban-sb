import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { Base64Image } from 'src/app/models/base64-image';

@Component({
  selector: 'app-uploadfile',
  templateUrl: './uploadfile.component.html',
  styleUrls: ['./uploadfile.component.css']
})
export class UploadfileComponent implements OnInit {

  @Output() LoadImagesEvent: EventEmitter <Array<Base64Image>> = new EventEmitter();

  images : Array<Base64Image> | undefined;
  
  constructor() { }

  ngOnInit(): void {
  }

  readFiles(files : any){
    
    this.images = new Array<Base64Image>(files.files.length);

    for(let i = 0; i < files.files.length; i++)
    {
      this.images[i] = new Base64Image(files.files[i]);
    }

    this.LoadImagesEvent.emit(this.images);
  }
}
