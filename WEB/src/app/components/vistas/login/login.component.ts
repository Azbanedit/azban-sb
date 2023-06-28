import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, NgForm, Validators } from '@angular/forms';
import { GetClientService } from '../../../services/get-client.service';
import { Login } from 'src/app/models/login';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  serviceClient: GetClientService;
  incorrectLoginMessage : boolean = false;
  login = new Login();
  registerForm = new FormGroup({
      email: new FormControl('', [Validators.required, Validators.email]),
      password: new FormControl( '', Validators.required)
  });
  constructor(private GetClientService: GetClientService) { 

    this.serviceClient = GetClientService;

  }

  ngOnInit(): void {
    
  }

  loginUser(){

    this.login.email = this.registerForm.controls.email.value;
    this.login.password = this.registerForm.controls.password.value;

    this.serviceClient.login(this.login).subscribe((resp : any) => { 
      var currentDate = new Date();
      if(resp == true){
        localStorage.setItem('azban-login', this.login.email);
        localStorage.setItem('login-date' , currentDate.toISOString());
        window.location.href = "/#/";
      }
      else{
        this.incorrectLoginMessage = true;
      }
    });
  }

}
