<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, css, php, jsp">
    <link rel="stylesheet" href="../Configuracion/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Configuracion/css/clase.css">
    <title>Proyecto</title>
</head>
<body>
    <header>
        <div >
            <h2 id="registerHeader"  class="heading">
                <a type="button" class="btn" id="houseIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                    </svg>
                </a>
                <strong id="initialText">Registro de Pedido </strong> 
            </h2>
            <hr id="color-line" style="height: 2px; margin: 15px;">
        </div>
    </header>
    <div id="general">
        <div id="">
            <!--Registro datos cliente-->
            
            <label for="factura"><h4>Datos de cliente</h4></label>
            <form id="form" class="form-floating">
                <div>
                    <div id="bg-form-group">
                            <div class="personalInformation">
                                <div class="row">
                                    <div class="col-1">
                                        <select  class="form-select" id="documentType" >
                                            <option selected>Tipo de documento</option>
                                            <option value="1">CC</option>
                                            <option value="2">TI</option>
                                            <option value="3">CE</option>
                                        </select>
                                    </div>    
                                    <div  class="col-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Número de documento" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append" >
                                                <button class="buttonColors input-group-text" id="basic-search">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="-2 -2 20 20">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <input type="text" class="form-control" placeholder="CC">
                                    </div>    
                                    <div  class="col-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="1013678845" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="col-3">       
                                        <input type="text" class="form-control" id="name" placeholder="Nombre y apellidos">   
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-3">
                                        <input type="text" class="form-control"  id="phone"  placeholder="Celular">
                                    </div>  
                                    <div class="col-3">
                                        <input type="email" class="form-control" id="email" placeholder="@gmail.com">   
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-3">
                                        <select  class="form-select" id="contactType" >
                                            <option selected>Tipo de contacto</option>
                                            <option value="1">Instagram</option>
                                            <option value="2">Mercado libre</option>
                                        </select>     
                                    </div>
                                    <div class="col-3">                    
                                        <input type="text" class="form-control" id="contact" placeholder="Contacto">
                                    </div>
                                </div>
                            </div>
    
                        <div class="aling-buttons">
                            <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                            <button class="buttonColors btn btn-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <form action="">
            <!--Registro de pedido-->
            <label for="factura"><h4>Registro de producto</h4></label>
            <div id="eliminarPedido">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                </svg>
            </div>
            <div class="row">
                <div class="col-2">
                    <select  class="form-select" id="documentType" >
                        <option selected>Prenda</option>
                        <option value="1">CC</option>
                        <option value="2">TI</option>
                        <option value="3">CE</option>
                    </select>
                </div>
                <div class="col-2">
                    <select  class="form-select" id="documentType" >
                        <option selected>Género</option>
                        <option value="1">CC</option>
                        <option value="2">TI</option>
                        <option value="3">CE</option>
                    </select>
                </div>
                <div class="col-2">
                    <select  class="form-select" id="documentType" >
                        <option selected>Talla</option>
                        <option value="1">CC</option>
                        <option value="2">TI</option>
                        <option value="3">CE</option>
                    </select>
                </div>
                <div class="col-2">
                    <select  class="form-select" id="documentType" >
                        <option selected>Color</option>
                        <option value="1">CC</option>
                        <option value="2">TI</option>
                        <option value="3">CE</option>
                    </select>
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" placeholder="Cantidad">
                </div>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <textarea class="form-control" placeholder="Estampado" id="" rows="1"></textarea>
                </div>
                <div  class="col-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Imagen" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append" >
                            <button class="buttonColors input-group-text" id="basic-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-4 form-group">
                    <textarea class="form-control" placeholder="Observaciones" id="" rows="1"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <textarea class="form-control" placeholder="Estampado" id="" rows="1"></textarea>
                </div>
                <div  class="col-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Imagen" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append" >
                            <button class="buttonColors input-group-text" id="basic-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-4 form-group">
                    <textarea class="form-control" placeholder="Observaciones" id="" rows="1"></textarea>
                </div>
            </div>
            <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                Agregar estampado
            </button>
            <div class="aling-buttons">
                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>
                </button>
                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg>
                </button>
            </div> 
        </form>
        <!--Registro datos de factura-->

        <form action="">
            <label for="factura"><h4>Datos de factura</h4></label>
            <div class="row">
                <div class="col-1">
                    <input type="text" class="form-control" placeholder="CC">
                </div>    
                <div  class="col-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="1013678845" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
                <div class="col-3">       
                    <input type="text" class="form-control" id="name" placeholder="Nombre y apellidos">   
                </div>
                <div class="col-3">
                    <input type="text" class="form-control"  id="number"  placeholder="# de factura">
                </div> 
            </div>

            <div class="row">
                <div class="col-3">
                    <input type="text" class="form-control"  id="phone"  placeholder="Dirección">
                </div>  
                <div class="col-3">
                    <input type="text" class="form-control" id="department" placeholder="Departamento">   
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="city" placeholder="Municipio">   
                </div>
            </div>
            <div class="aling-buttons">
                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                    Generar factura
                </button>
            </div> 
        </form>
        <!--Registro de pago-->
        <form action="">
        <label for="factura"><h4>Registrar pago</h4></label>
            <div class="row">
                <div class="col-3">
                    <select  class="form-select" id="TipoPago" >
                        <option selected>Medio de pago</option>
                        <option value="1">Nequi</option>
                        <option value="2">Daviplata</option>
                    </select> 
                </div>
                <div class="col-3">
                    <div id="margin-top" class="row">
                        <div class="col-6">
                            <button type="button" class="width-100-buttonPay btn btn-success">Pago</button>
                        </div>
                        <div class="col-6"> 
                            <button type="button" class="width-100-buttonPay btn btn-success">Abono</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-2">
                    <input type="text" class="form-control"  id="pago"  placeholder="Abonado">
                </div>
                <div class="col-2">
                    <input type="text" class="form-control"  id="place2"  placeholder="Descuento">
                </div>
                <div class="col-2">
                    <input type="text" class="form-control"  id="place2"  placeholder="Total a pagar">
                </div>
            </div>

            <div class="aling-buttons">
                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </button>
            </div>
            <button id="asterisco">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="colorAsterisco bi bi-asterisk" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                </svg>

            </button>
        </form>
    </div>
</body>
<footer>
    <div>
       2022 Copyright Azban
    </div>
  </footer>
</html>