@extends('layouts.app_admin')

@section('content')
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e838e8d238.js" crossorigin="anonymous"></script>

<style>






@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em;
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em;
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}



.blue { color: #185875; }
.yellow { color: #FFF842; }



.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;

  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);

  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}


#flipkart-navbar {
    background-color: #2874f0;
    color: #FFFFFF;
}

.row1{
    padding-top: 10px;
    padding-right: 50px;
}

.row2 {
    padding-bottom: 20px;
}

.flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 0 0 2px;
    border: 0 none;
    outline: 0 none;
    font-size: 15px;
}

.flipkart-navbar-button {
    background-color: #ffe11b;
    border: 1px solid #ffe11b;
    border-radius: 0 2px 2px 0;
    color: #565656;
    padding: 10px 0;
    height: 43px;
    cursor: pointer;
}

.cart-button {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
    padding: 10px 0;
    text-align: center;
    height: 41px;
    border-radius: 2px;
    font-weight: 500;
    width: 120px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
}

.cart-button:hover{
    text-decoration: none;
    color: #fff;
    cursor: pointer;
}

.cart-svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    margin-right: 8px;
}

.item-number {
    border-radius: 3px;
    background-color: rgba(0, 0, 0, .1);
    height: 20px;
    padding: 3px 6px;
    font-weight: 500;
    display: inline-block;
    color: #fff;
    line-height: 12px;
    margin-left: 10px;
}

.upper-links {
    display: inline-block;
    padding: 0 11px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0;
    color: inherit;
    border: none;
    outline: none;
    font-size: 12px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0px;
}

.dropdown:hover {
    background-color: #fff;
}

.dropdown:hover .links {
    color: #000;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0px;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0px;
}

.links {
    color: #fff;
    text-decoration: none;
}

.links:hover {
    color: #fff;
    text-decoration: none;
}

.profile-links {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #e9e9e9;
    box-sizing: border-box;
    display: block;
    padding: 0 11px;
    line-height: 23px;
}

.profile-li{
    padding-top: 2px;
}

.largenav {
    display: none;
}

.smallnav{
    display: block;
}

.smallsearch{
    margin-left: 15px;
    margin-top: 15px;
}

.menu{
    cursor: pointer;
}

@media screen and (min-width: 768px) {
    .largenav {
        display: block;
    }
    .smallnav{
        display: none;
    }
    .smallsearch{
        margin: 0px;
    }
}

/*Sidenav*/
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    box-shadow: 0 4px 8px -3px #555454;
    padding-top: 0px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color: #fff;
}

@media screen and (max-height: 450px) {
  .sidenav a {font-size: 18px;}
}

.sidenav-heading{
    font-size: 36px;
    color: #fff;
}

h5,td{
  color:#fff;
}
</style>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div id="flipkart-navbar">
    <div class="">
        <div class="row row1">
            <ul class="largenav pull-right">
              <li class="upper-links"><a class="links" href="{{ URL::to('/') }}/products_list">Clientes <i class="fas fa-users"></i></a></li>
              <li class="upper-links"><a class="links" href="{{ URL::to('/') }}/products_list">Historial Pedidos <i class="fas fa-book"></i></a></li>
                <li class="upper-links"><a class="links" href="{{ URL::to('/') }}/products_list">Inventario <i class="fas fa-warehouse"></i></a></li>
                <li class="upper-links"><a class="links" href="{{ URL::to('/') }}/categories_list">Categorias <i class="fas fa-th-list"></i></a></li>
                <li class="upper-links"><a class="links" href="{{ URL::to('/') }}/categories_list">Reporte Ventas <i class="fas fa-money-check-alt"></i></a></li>
                <li class="upper-links"><a class="links" href="{{ URL::to('/') }}/categories_list">Metodos de Pago <i class="fas fa-wallet"></i></a></li>
                <li class="upper-links"><a class="links" href="{{ URL::to('/') }}/categories_list">Configurar Tienda <i class="fas fa-users-cog"></i></a></li>
                <li class="upper-links"><a class="links" href="{{ URL::to('/') }}/logout">Cerrar Sesion <i class="fas fa-sign-out-alt"></i></a></li>


            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
                <h1 style="margin-top:-65px;"><span class="largenav">EShop</span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                    <input class="flipkart-navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="cart largenav col-sm-2">
                <a class="cart-button">

                    <span class="item-number ">Salir <i class="fas fa-sign-out-alt"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
</div>

<div class="row" style="width:100%;">
  <div class="col-md-5">

    <div class="row" style="padding:15px; padding-left:5%;">
      <div class="col-md-12" style="height:700px; background-color:#262b3b; color:#fff;">
           <h3>Usuario de Administración:</h3>
           <p>{{$user->name}}</p>
          <hr>

          <a class="cart-button"
          onclick="$('#Formulario_categoria').css('display','block');"
          style="width:180px; height:40px;">
                  Agregar Categoria <i class="fas fa-plus-circle"></i>
              </a>

              <a class="cart-button" style="width:180px; height:40px;"
              onclick="$('#formulario_articulo').css('display','block');"
              >
                      Agregar Articulo <i class="fas fa-plus-circle"></i>
                  </a>

                  <a class="cart-button" style="width:180px; height:40px;">
                          Cambiar Fondos <i class="far fa-images"></i>
                      </a>
                  <hr>
                  <a class="cart-button" style="width:180px; height:40px;">
                          Codigo de Promoción <i class="fas fa-ticket-alt"></i>
                      </a>
                      <hr>











                      <div style="width:100%; display:none;" id="Formulario_categoria">
                        <div style="padding:10px;">
                          <h3>Formulario de Categoria</h3>
                          <h5>Lista de Categorias Vigentes</h5>
                          <select class="form-control">
                                <option>Categorias Actuales ...</option>
                                @foreach($cats as $c)
                                  <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach

                          </select>
                          <hr>
                          <h5>Agregar Categoria</h5>
                          <form action="{{ URL::to('/') }}/add_category" method="post">
                            @csrf
                                  <input class="form-control"
                                  style="width:60%;" name="name"
                                   placeholder="Nombre de categoria (Una sola palabra)"/>
                                  <button class="btn btn-success"
                                  style="margin-left:65%; margin-top:-55px; width:35%;"
                                  >
                                    Agregar <i class="fas fa-plus-circle"></i></button>
                          </form>
                          <hr>
                          <a class="text-danger" href="{{ URL::to('/') }}/categories_list">
                            Borrar una Categoria
                          <i class="fas fa-trash"></i></a>
                          <div class="row" style="height:40px;"></div>
                        </div>
                      </div>



                      <div id="formulario_articulo" style="width:100%; display:none;">
                        <h3>Fromulario de Articulo</h3>
                        <form action="{{ URL::to('/') }}/add_product" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="col-md-5">
                              <label>Titulo:</label>
                              <input class="form-control"
                              style="width:100%;" maxlength="30"
                              name="title"
                              placeholder="Titulo simple y certero"/>
                            </div>
                            <div class="col-md-3">
                              <label>Precio($):</label>
                              <input class="form-control"
                              style="width:100%;"
                              name="price"
                              step=".01"
                              type="number"
                              placeholder="Precio Neto en (MXN)"/>
                            </div>
                            <div class="col-md-4">
                              <label>Categoria:</label>
                              <select class="form-control" name="id_category">
                                    <option>Asigna un Categoria...</option>
                                    @foreach($cats as $c)
                                      <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach

                              </select>
                            </div>
                          </div>
                          <br>
                          <br>
                          <label>Imagen:</label>
                          <input type="file" name="myImage"
                          accept="image/x-png,image/gif,image/jpeg" />
                          <br><br>
                                <label>Descripcion:</label>
                                <input class="form-control"
                                style="width:60%;"
                                maxlength="100"
                                name="description"
                                 placeholder="Nombre de categoria (Una sola palabra)"/>
                                <button class="btn btn-success"
                                style="margin-left:65%; margin-top:-55px; width:35%;">
                                  Agregar <i class="fas fa-plus-circle"></i></button>
                        </form>
                      </div>










      </div>
    </div>
  </div>

  <div class="col-md-7"
  style="
  padding:10px;
  ">

  <table class="container" style="width:100%;">
  	<thead>
  		<tr>
  			<th><h5 class="text-white">Cliente</h5></th>
  			<th  class="text-white"><h5>Compra</h5></th>
  			<th  class="text-white"><h5>Fecha</h5></th>
        <th  class="text-white"><h5>Cantidad</h5></th>
  			<th  class="text-white"><h5>Atender</h5></th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr>
  			<td>Arturo Maciel Tsting Prado</td>
  			<td>Iphone 8 64 GB</td>
  			<td>12:12:12 12:12:12</td>
        <td>$8900.00</td>
  			<td><a class="cart-button">
                    <span class="item-number ">Entregar <i class="fas fa-people-carry"></i></span>
                </a>
          </td>
  		</tr>
      <tr>
  			<td>Arturo Maciel Tsting Prado</td>
  			<td>Iphone 8 64 GB</td>
  			<td>12:12:12 12:12:12</td>
        <td>$8900.00</td>
  			<td><a class="cart-button">
                    <span class="item-number ">Entregar <i class="fas fa-people-carry"></i></span>
                </a>
          </td>
  		</tr>
      <tr>
  			<td>Arturo Maciel Tsting Prado</td>
  			<td>Iphone 8 64 GB</td>
  			<td>12:12:12 12:12:12</td>
        <td>$8900.00</td>
  			<td><a class="cart-button">
                    <span class="item-number ">Entregar <i class="fas fa-people-carry"></i></span>
                </a>
          </td>
  		</tr>
      <tr>
        <td>Arturo Maciel Tsting Prado</td>
        <td>Iphone 8 64 GB</td>
        <td>12:12:12 12:12:12</td>
        <td>$8900.00</td>
        <td><a class="cart-button">
                    <span class="item-number ">Entregar <i class="fas fa-people-carry"></i></span>
                </a>
          </td>
      </tr>
      <tr>
        <td>Arturo Maciel Tsting Prado</td>
        <td>Iphone 8 64 GB</td>
        <td>12:12:12 12:12:12</td>
        <td>$8900.00</td>
        <td><a class="cart-button">
                    <span class="item-number ">Entrega <i class="fas fa-people-carry"></i></span>
                </a>
          </td>
      </tr>

  	</tbody>
  </table>


<div class="row" style="padding:15px; padding-top:15px; padding-bottom:10px;">
  <div class="col-md-12" style="height:80px; background-color:#262b3b;">
  </div>
</div>

<div class="row" style="padding:15px; padding-top:5px;">
  <div class="col-md-12" style="height:140px; background-color:#333d4f;">



<div style="margin-top:45px;">
    <a class="cart-button">
                <span class="item-number ">Entrega <i class="fas fa-people-carry"></i></span>
            </a>

</div>


  </div>
</div>

  </div>



        </div>


<script>
function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);


function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
</script>
@endsection
