@extends('layouts.dashboard')
@section('content')
<div class="card">
  <h4 class="card-header">Agregar Personal</h4>
  <div class="card-body">
    @include('alert.mensaje')
    <form action="{{route('personal.store')}}" method="POST" >

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row ">
           <div class="col-md-3 "></div>
            <div class="col-md-6 ">
              <div class="form-group text-center">
                  {!!Form::label('Cedula','Cedula:')!!}
                  {!!Form::text('Cedula_Personal',null,['class'=>'form-control','placeholder'=>'xxx-xxxxxx-xxxxx'])!!}
            </div>
           </div>
          </div>
         @include('personal.formulario.datos')
         <input class="btn btn-primary" type="submit">
        </form>
  </div>
</div>     
@stop