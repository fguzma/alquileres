@extends('layouts.dashboard')
@section('content')
@include('alert.errores')
<div class="card">
  <h4 class="card-header">Agregar Cliente</h4>
  <div class="card-body">
    @include('alert.mensaje')
    <form action="{{route('cliente.store')}}" method="POST" >

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row ">
           <div class="col-md-3 "></div>
            <div class="col-md-6 ">
              <div class="form-group text-center">
                  {!!Form::label('Cedula','Cedula:')!!}
                  {!!Form::text('Cedula_Cliente',null,['class'=>'form-control','placeholder'=>'xxx-xxxxxx-xxxxx', 'onkeypress="return numero(event);"','id="CC"'])!!}
                  
            </div>
           </div>
          </div>
         @include('cliente.formulario.datos')
         <input class="btn btn-primary" type="submit">
        </form>
  </div>
</div>
<script>

  var pos=0;
  function numero(e)
  {
    pos=$("#CC").val().length;
    console.log(pos);
    if(pos==4 || pos==11)
    {
      $("#CC").val($("#CC").val()+"-");
    }
    
    var keynum = (document.all) ? e.keyCode : e.which;;
    console.log(keynum);
    if ((keynum>64 && keynum<91) || (keynum>96 && keynum<123) || (keynum>47 && keynum<10))
    return true;
      
    return /\d/.test(String.fromCharCode(keynum));
  }
</script>>     
@stop