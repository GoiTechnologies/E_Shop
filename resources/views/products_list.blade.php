@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e838e8d238.js" crossorigin="anonymous"></script>
<style>
/*******************************
* Does not work properly if "in" is added after "collapse".
* Get free snippets on bootpen.com
*******************************/
    .panel-group .panel {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
    }

    .panel-default > .panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 14px;
    }

    .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
    }

/* ----- v CAN BE DELETED v ----- */


.demo {
    padding-top: 60px;
    padding-bottom: 60px;
}






.shape{
  border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
-ms-transform:rotate(360deg); /* IE 9 */
-o-transform: rotate(360deg);  /* Opera 10.5 */
-webkit-transform:rotate(360deg); /* Safari and Chrome */
transform:rotate(360deg);
}
.offer{
background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform:rotate scale(1.1);
  -webkit-transition: all 0.4s ease-in-out;
-moz-transition: all 0.4s ease-in-out;
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
  }
.shape {
border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
border-color: transparent #d9534f transparent transparent;
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
border-color: transparent #5cb85c transparent transparent;
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
border-color: transparent #999999 transparent transparent;
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
border-color: transparent #428bca transparent transparent;
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
border-color: transparent #5bc0de transparent transparent;
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
border-color: transparent #f0ad4e transparent transparent;
}

.shape-text{
color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
-ms-transform:rotate(30deg); /* IE 9 */
-o-transform: rotate(360deg);  /* Opera 10.5 */
-webkit-transform:rotate(30deg); /* Safari and Chrome */
transform:rotate(30deg);
}
.offer-content{
padding:0 20px 10px;
}
@media (min-width: 487px) {
.container {
  max-width: 750px;
}
.col-sm-6 {
  width: 50%;
}
}
@media (min-width: 900px) {
.container {
  max-width: 970px;
}
.col-md-4 {
  width: 33.33333333333333%;
}
}

@media (min-width: 1200px) {
.container {
  max-width: 1170px;
}
.col-lg-3 {
  width: 25%;
}
}


</style>




    <div class="row justify-content-center" style="width:100%;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ARTICULOS {{ config('app.name') }}<br>
                <a href="{{ URL::to('/') }}/home"><i class="fas fa-arrow-alt-circle-left"></i> Regresar</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b class="text-danger">NOTA: Eliminar Productos no se puede deshacer...</b>
                    <br><br>

                    <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Img</th>
      <th scope="col">Nombre</th>
      <th scope="col" class="text-center">Stock</th>
      <th scope="col">Fecha de Creacion</th>
      <th scope="col">Tipo de campo</th>
      <th class="text-center" scope="col">Borrar <i class="fas fa-trash"></i></th>

    </tr>
  </thead>
  <tbody>

    @foreach($cats as $c)
    <tr>
      <th scope="row">
        <img style="width:30px; height:30px; cursor:pointer;" data-toggle="modal" data-target="#exampleModal{{$c->id}}"
         src="{{URL::to('/') }}/products/{{$c->img}}"/>


      </th>
      <td>{{$c->title}}</td>
      <td class="text-center">{{$c->stock}}</td>
      <td>{{$c->created_at}}</td>
      <td><span class="badge badge-success">Articulo General</span></td>
      <td class="text-center">

        <form action="{{ URL::to('/') }}/delete_product" method="post">
          @csrf
          <input name="id_product" value="{{$c->id}}" hidden/>
          <button class="btn btn-outline-danger btn-sm"
          style="font-size:10px;"><i class="fas fa-trash"></i></button>
        </form>

      </td>
    </tr>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$c->id}}"
    style="margin-top:4%;"
     tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vista Previa de Articulo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="{{URL::to('/') }}/products/{{$c->img}}" style="width:300px; height:300px;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar Imagen</button>
          </div>
        </div>
      </div>
    </div>


    @endforeach
  </tbody>
</table>














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
</script>
@endsection
