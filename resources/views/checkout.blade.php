<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoiShop</title>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e838e8d238.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .navbar{
              -webkit-box-shadow: 0px 7px 0px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 7px 0px 0px rgba(0,0,0,0.75);
box-shadow: 0px 7px 0px 0px rgba(0,0,0,0.75);
            }




            body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 80px;
}
h2 b {
	color: #ffc000;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	background: rgba(0, 0, 0, 0.2);
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	min-height: 330px;
    text-align: center;
	overflow: hidden;
}
.carousel .item .img-box {
	height: 160px;
	width: 100%;
	position: relative;
}
.carousel .item img {
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
	margin: 10px 0;
}
.carousel .item .btn {
	color: #333;
    border-radius: 0;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #ccc;
    padding: 5px 10px;
    margin-top: 5px;
    line-height: 16px;
}
.carousel .item .btn:hover, .carousel .item .btn:focus {
	color: #fff;
	background: #000;
	border-color: #000;
	box-shadow: none;
}
.carousel .item .btn i {
	font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .thumb-wrapper {
	text-align: center;
}
.carousel .thumb-content {
	padding: 15px;
}
.carousel .carousel-control {
	height: 100px;
    width: 40px;
    background: none;
    margin: auto 0;
    background: rgba(0, 0, 0, 0.2);
}
.carousel .carousel-control i {
    font-size: 30px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -16px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: rgba(0, 0, 0, 0.8);
    text-shadow: none;
    font-weight: bold;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	color: #999;
	margin-right: 5px;
}
.carousel .item-price span {
	color: #86bd57;
	font-size: 110%;
}
.carousel .carousel-control.left i {
	margin-left: -3px;
}
.carousel .carousel-control.left i {
	margin-right: -3px;
}
.carousel .carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border-color: transparent;
}
.carousel-indicators li {
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {
	background: rgba(0, 0, 0, 0.6);
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}

body {
       color: #566787;
   background: #f5f5f5;
   font-family: 'Varela Round', sans-serif;
   font-size: 13px;
 }
 .table-wrapper {
       background: #fff;
       padding: 20px 25px;
       margin: 30px 0;
   border-radius: 3px;
       box-shadow: 0 1px 1px rgba(0,0,0,.05);
   }
 .table-title {
   padding-bottom: 15px;
   background: #299be4;
   color: #fff;
   padding: 16px 30px;
   margin: -20px -25px 10px;
   border-radius: 3px 3px 0 0;
   }
   .table-title h2 {
   margin: 5px 0 0;
   font-size: 24px;
 }
 .table-title .btn {
   color: #566787;
   float: right;
   font-size: 13px;
   background: #fff;
   border: none;
   min-width: 50px;
   border-radius: 2px;
   border: none;
   outline: none !important;
   margin-left: 10px;
 }
 .table-title .btn:hover, .table-title .btn:focus {
       color: #566787;
   background: #f2f2f2;
 }
 .table-title .btn i {
   float: left;
   font-size: 21px;
   margin-right: 5px;
 }
 .table-title .btn span {
   float: left;
   margin-top: 2px;
 }
   table.table tr th, table.table tr td {
       border-color: #e9e9e9;
   padding: 12px 15px;
   vertical-align: middle;
   }
 table.table tr th:first-child {
   width: 60px;
 }
 table.table tr th:last-child {
   width: 100px;
 }
   table.table-striped tbody tr:nth-of-type(odd) {
     background-color: #fcfcfc;
 }
 table.table-striped.table-hover tbody tr:hover {
   background: #f5f5f5;
 }
   table.table th i {
       font-size: 13px;
       margin: 0 5px;
       cursor: pointer;
   }
   table.table td:last-child i {
   opacity: 0.9;
   font-size: 22px;
       margin: 0 5px;
   }
 table.table td a {
   font-weight: bold;
   color: #566787;
   display: inline-block;
   text-decoration: none;
 }
 table.table td a:hover {
   color: #2196F3;
 }
 table.table td a.settings {
       color: #2196F3;
   }
   table.table td a.delete {
       color: #F44336;
   }
   table.table td i {
       font-size: 19px;
   }
 table.table .avatar {
   border-radius: 50%;
   vertical-align: middle;
   margin-right: 10px;
 }
 .status {
   font-size: 30px;
   margin: 2px 2px 0 0;
   display: inline-block;
   vertical-align: middle;
   line-height: 10px;
 }
   .text-success {
       color: #10c469;
   }
   .text-info {
       color: #62c9e8;
   }
   .text-warning {
       color: #FFC107;
   }
   .text-danger {
       color: #ff5b5b;
   }
   .pagination {
       float: right;
       margin: 0 0 5px;
   }
   .pagination li a {
       border: none;
       font-size: 13px;
       min-width: 30px;
       min-height: 30px;
       color: #999;
       margin: 0 2px;
       line-height: 30px;
       border-radius: 2px !important;
       text-align: center;
       padding: 0 6px;
   }
   .pagination li a:hover {
       color: #666;
   }
   .pagination li.active a, .pagination li.active a.page-link {
       background: #03A9F4;
   }
   .pagination li.active a:hover {
       background: #0397d6;
   }
 .pagination li.disabled i {
       color: #ccc;
   }
   .pagination li i {
       font-size: 16px;
       padding-top: 6px
   }
   .hint-text {
       float: left;
       margin-top: 10px;
       font-size: 13px;
   }

        </style>
    </head>
    <body>
      <?php $pi = 0.0; ?>@foreach($prods as $p) <?php $pi = $pi + $p->price;?>  @endforeach





      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="{{ URL::to('/') }}">
        <img
        src="{{ URL::to('/') }}/logo_fix.png"
        style="margin-top:-10px;"
         width="50px"/>
      </a>

      <button class="navbar-toggler" type="button"
      data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <form action="{{ URL::to('/') }}/search" method="post">
          @csrf
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
              <input class="form-control mr-sm-2"
              id="input_search" name="search" type="search" style="min-width:700px;"
              placeholder="Busca tus articulos favoritos" aria-label="Search">
          </li>


          <li class="nav-item">
              <button class="btn btn-outline-danger my-2 my-sm-0" id="btn_search"
              style="margin-left:50px;"
               type="submit">Buscar</button>
          </li>
    </form>


          <li class="nav-item">


              <a class="btn btn-outline-danger my-2 my-sm-0"
              style="margin-left:15px;" id="shopingcart_btn"
              onclick="window.location.href = '{{ URL::to('/') }}/checkout';"
             ><i class="fas fa-shopping-cart text-dark"></i></a>


          </li>




          <li class="nav-item dropdown">


            <a class="nav-link far fa-user"
              style="font-size:24px; margin-left:50px;"
             href="#" id="navbarDropdown"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if(isset($user))  <b style="font-size:14px; margin-top:-10px; font-family: 'arial', serif;">{{ $user->name }}</b> @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              @if(isset($user))
              <a class="dropdown-item" href="{{ URL::to('/') }}/logout">Logout <i class="fas fa-sign-in-alt"></i></a>
              @else

              <a class="dropdown-item" href="{{ URL::to('/') }}/login">Acceder <i class="fas fa-sign-in-alt"></i></a>
              <a class="dropdown-item" href="{{ URL::to('/') }}/register">Registro <i class="fas fa-user-plus"></i></a>

              @endif

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ URL::to('/') }}/help">Ayuda <i class="fas fa-question-circle"></i></a>
            </div>


          </li>



        </ul>

      </div>
    </nav>


















      <div class="row" id="category_div"
      style="min-height:90px; background-color:#000; padding-left:50px;"
      >

        <div class="col-md-3">
          <h3 class="text-white" style="margin-top:70px;">Lo más vendido <i class="fas fa-stopwatch-20"></i></h3>
        </div>
        <div class="col-md-3">
          <h3 class="text-white" style="margin-top:70px;">Electrónica <i class="fas fa-headphones"></i></h3>
        </div>
        <div class="col-md-3">
          <h3 class="text-white" style="margin-top:70px;">Ropa & Calzado<i class="fas fa-tshirt"></i></h3>
        </div>
        <div class="col-md-3">
          <h3 class="text-white" style="margin-top:70px;">Automovilismo <i class="fas fa-car"></i></h3>
        </div>

      </div>













<div class="container" id="div_main">


  <img src="{{ URL::to('/') }}/db2.jpg" width="100%" />


  <div class="table-wrapper">
      <div class="table-title" style="background-color:#000;">
        <h3>1.- Informacíon de <b>Envío <i class="fas fa-truck"></i></b></h3>
      </div>


      <div class="row">
          <div class="col-md-6">
            <label>Dirección:</label>
            <input class="form-control" id="direccion" placeholder="Direccion presisa ..."/>
            <label>Correo Electronico:</label>
            <input class="form-control" id="correo" value="{{$user->email}}"
             placeholder="Ingresa tu correo @ electronico ... "/>
          </div>
          <div class="col-md-3">
            <label>Telefono:</label>
            <input class="form-control" type="number" id="tel"
             maxlength="10" placeholder="55 4444 4444"/>
            <label>Codigo Postal:</label>
            <input class="form-control" type="number" id="cp" placeholder="45208 ..."/>
          </div>

          <div class="col-md-3">
            <label>Estado:</label>
            <select class="form-control" id="estado">
              <option value="no">Seleccione uno...</option>
               <option value="Aguascalientes">Aguascalientes</option>
               <option value="Baja California">Baja California</option>
               <option value="Baja California Sur">Baja California Sur</option>
               <option value="Campeche">Campeche</option>
               <option value="Chiapas">Chiapas</option>
               <option value="Chihuahua">Chihuahua</option>
               <option value="CDMX">Ciudad de México</option>
               <option value="Coahuila">Coahuila</option>
               <option value="Colima">Colima</option>
               <option value="Durango">Durango</option>
               <option value="Estado de México">Estado de México</option>
               <option value="Guanajuato">Guanajuato</option>
               <option value="Guerrero">Guerrero</option>
               <option value="Hidalgo">Hidalgo</option>
               <option value="Jalisco">Jalisco</option>
               <option value="Michoacán">Michoacán</option>
               <option value="Morelos">Morelos</option>
               <option value="Nayarit">Nayarit</option>
               <option value="Nuevo León">Nuevo León</option>
               <option value="Oaxaca">Oaxaca</option>
               <option value="Puebla">Puebla</option>
               <option value="Querétaro">Querétaro</option>
               <option value="Quintana Roo">Quintana Roo</option>
               <option value="San Luis Potosí">San Luis Potosí</option>
               <option value="Sinaloa">Sinaloa</option>
               <option value="Sonora">Sonora</option>
               <option value="Tabasco">Tabasco</option>
               <option value="Tamaulipas">Tamaulipas</option>
               <option value="Tlaxcala">Tlaxcala</option>
               <option value="Veracruz">Veracruz</option>
               <option value="Yucatán">Yucatán</option>
               <option value="Zacatecas">Zacatecas</option>
            </select>
          </div>

      </div>


    </div>


    <div class="table-wrapper">
        <div class="table-title" style="background-color:#000;">
            <div class="row">
                <div class="col-sm-6">
        <h3>2.- Mi <b>Carrito <i class="fas fa-shopping-cart"></i></b></h3>
      </div>

      <div class="col-sm-6 text-right">



<h3>Total $<b> {{$pi}} MXN </b></h3>
</div>

            </div>
        </div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
        <th>Date Created</th>
        <th>Role</th>
                    <th>No. Articulos</th>
        <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>




              @foreach($prods as $p)
                <tr>
                    <td>{{$p->id}}</td>
                  <td>
                    <a href="#">
                    <img style="width:60px; height:60px;"
                    src="{{URL::to('/') }}/products/{{$p->img}}"
                    class="avatar" alt="Avatar">
                  </a>
                  </td>

                    <td><h5>{{$p->title}}</h5></td>
                    <td><h5>$ {{$p->price}} MXN</h5></td>
                  <td><span class="status text-success">&bull;</span> 1 Articulo(s)</td>
                  <td>




                    <a href="#" onclick="delete_cart('{{$p->id}}');" class="delete" title="Delete" type="submit" data-toggle="tooltip">
                      <i class="fas fa-minus-circle text-danger"></i></a>



                  </td>
                </tr>
                @endforeach







            </tbody>
        </table>
  <div class="clearfix">
            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination">

                <button class="btn btn-primary" onclick="verify_direction();" id="one">
                Continuar <i class="fas fa-arrow-alt-circle-right"></i></button>


                <button class="btn btn-success" onclick="verify_direction();"
                data-toggle="modal" data-target="#exampleModal" id="btnModal" style="display:none;">
                Pagar Ahora <i class="fas fa-money-bill-wave"></i></button>


                <button class="btn btn-success" onclick="save_purchase('DEVELOPER');"
                id="dev" style="display:none;">
                DEV <i class="fas fa-money-bill-wave"></i></button>

            </ul>
        </div>
    </div>
</div>









<div class="modal fade"
id="exampleModal" tabindex="-1"
style="margin-top:1%;"
 role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img width="100%" src="{{ URL::to('/') }}/metodo.png"/>

      </div>
      <div class="modal-body">

        <div class="row text-center">
          <div class="col-md-12" style="padding-bottom:20px;">
              <img width="100%" src="{{ URL::to('/') }}/goicoinpay.png"/>
          </div>
          <div class="col-md-12" style="padding-bottom:20px;">
              <img width="100%" src="{{ URL::to('/') }}/taget.png"/>
          </div>
          <div class="col-md-12" style="padding-bottom:20px;">
            <div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AQxULHMqwuuL-m5qfTtomVX7pL6XNvk2v0WWLKNn7znmCLBLcVk2hEWRUP789u9zYdStMo4FzE2e-LW6&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
paypal.Buttons({
    style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: 'paypal',

    },
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '{{$pi}}'
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
        });
    }
}).render('#paypal-button-container');
</script>
          </div>
          <div class="col-md-12" style="padding-bottom:20px;">
            <hr>
            <h5>Total a Pagar:</h5>
              <h3 class="text-dark">$90,000.00 MXN</h3>

              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
          </div>
        </div>


      </div>

    </div>
  </div>
</div>




<!-- Footer -->
<footer class="page-footer font-small teal pt-4"
style="margin-top:200px; background-color:#000; color:#fff;">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">GoiShop Online <i class="fas fa-store-alt"></i></h5>
        <p>Los articulos en venta asi como su envio estan sujetos a disponivilidad de stock y
        posibilidad de envio, para dudas y ó aclaraciones  puedes consultarnos al correo: soporte@goicoin.net ó
      al Telefono: 52 33XX XXXX</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Aviso de Privacidad <i class="fas fa-exclamation-circle"></i></h5>
        <p>Este sitio recopila cookies para ofrecer una experiencia de navegacion personalizada,
        Los datos personales recolectados son protegidos y asegurados, puedes descargar el documento
       oficial de aviso de privacidad desde <a href="#">Aquí</a></p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 GoiShop:
    <a href="https://goicoin.net/"> By Green Oceans Blockchain</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script>
function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};
if(isMobileDevice()){
      $("#category_div").remove();
      $("#banners").css("margin-top","50px");
      $("#input_search").css("min-width","300px");
      $("#input_search").css("width","100%");
      $("#input_search").css("margin-top","10px");
      $("#btn_search").css("margin-left","0px");
      $("#shopingcart_btn").css("margin-left","0px");
      $("#navbarDropdown").css("margin-left","0px");
      $("#div_main").css("margin-top","70px");

}


function delete_cart(id){
    var form = document.createElement("form");
    var element2 = document.createElement("input");
    var element3 = document.createElement("input");
    form.method = "POST";
    form.action = "{{URL::to('/') }}/sc_delete";
    element2.value="{{ csrf_token() }}";
    element2.name="_token";
    form.appendChild(element2);
    element3.value=id;
    element3.name="id_product";
    form.appendChild(element3);
    document.body.appendChild(form);
    form.submit();
}

function verify_direction(){
  if($("#direccion").val() == ""){
    alert("Ingresa direccion de envio...");
    $('#exampleModal').modal('hide');
    $("#direccion").focus();
  }else{
    if($("#tel").val() == ""){
      $('#exampleModal').modal('hide');
      alert("Ingresa telefono de contacto...");
      $("#tel").focus();
    }else{
      if($("#cp").val() == ""){
        $('#exampleModal').modal('hide');
        alert("Ingresa codigo postal valido...");
        $("#cp").focus();
      }else{
        if($("#correo").val() == ""){
          $('#exampleModal').modal('hide');
          alert("Ingresa correo valido...");
          $("#correo").focus();
        }else{
          if($("#estado").val() == "no"){
            $('#exampleModal').modal('hide');
            alert("Ingresa estado valido...");
            $("#estado").focus();
          }else{
            $("#one").css("display","none");
            $("#btnModal").css("display","block");
            $("#dev").css("display","block");
          }
        }
      }
    }
  }
}


function save_purchase(origen){
    var form = document.createElement("form");
    var element2 = document.createElement("input");
    var element3 = document.createElement("input");
    var element4 = document.createElement("input");
    var element5 = document.createElement("input");
    var element6 = document.createElement("input");
    var element7 = document.createElement("input");
    var element8 = document.createElement("input");

    form.method = "POST";
    form.action = "{{URL::to('/') }}/buy_success_process";

    element2.value="{{ csrf_token() }}";
    element2.name="_token";
    form.appendChild(element2);

    element3.value=$("#direccion").val();
    element3.name="direccion";
    form.appendChild(element3);





    element4.value=$("#tel").val();
    element4.name="telefono";
    form.appendChild(element4);

    element5.value=$("#cp").val();
    element5.name="cp";
    form.appendChild(element5);

    element6.value=$("#estado").val();
    element6.name="estado";
    form.appendChild(element6);


    element7.value=origen;
    element7.name="origen";
    form.appendChild(element7);


    element8.value='{{$pi}}';
    element8.name="cantidad";
    form.appendChild(element8);

    document.body.appendChild(form);
    form.submit();
}
</script>
    </body>
</html>
