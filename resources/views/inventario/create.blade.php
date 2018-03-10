@extends('layouts.dashboard')
@section('content')
<div class="card">
  <h4 class="card-header">Agregar Inventario</h4>
  <div class="card-body">
    @include('alert.mensaje')
    <form action="{{route('inventario.store')}}" method="POST" >

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
         @include('inventario.formulario.datos')
         <input class="btn btn-primary" type="submit">
        </form>
  </div>
</div>     
@stop