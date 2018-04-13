@extends('layouts.dashboard')
@section('content')
<div class="d-block bg-primary" style="padding-top: 30px; "  >
@include('alert.mensaje')
<table class="table table-hover table-inverse">
  <thead>
        <th class="text-center">Nombre</th>
  </thead>
  @foreach($servicios as $servicio)
    <tbody> 
        <td class="text-center">{{$servicio->Nombre}}</td> 
            {!!Form::open(['route'=>['servicio.destroy',$servicio->ID_Servicio],'method'=>'DELETE'])!!}
            <td>
            {!!link_to_route('servicio.edit', $title = 'Editar', $parameters = $servicio->ID_Servicio, $attributes = ['class'=>'btn btn-primary'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            </td>
            {!!Form::close()!!}
    </tbody>
    @endforeach
</table>
{!!$servicios->render("pagination::bootstrap-4")!!}
</div>
@stop