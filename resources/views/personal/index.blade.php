@extends('layouts.dashboard')
@section('content')
<div class="d-block bg-primary" style="padding-top: 30px; "  >
@include('alert.mensaje')
<table class="table table-hover table-inverse">
  <thead>
        <th class="text-center">Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th class="text-center">Direccion</th>
        <th>Fecha Nacimiento</th>
  </thead>
  @foreach($personal as $trabajador)
    <tbody class="text-center"> 
        <td>{{$trabajador->Cedula_Personal}}</td> 
        <td>{{$trabajador->Nombre}}</td>    
        <td>{{$trabajador->Apellido}}</td>  
        <td>{{$trabajador->Direccion}}</td>  
        <td>{{$trabajador->Fecha_Nac}}</td>  
            {!!Form::open(['route'=>['personal.destroy',$trabajador->Cedula_Personal],'method'=>'DELETE'])!!}
            <td>
            {!!link_to_route('personal.edit', $title = 'Editar', $parameters = $trabajador->Cedula_Personal, $attributes = ['class'=>'btn btn-primary'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            </td>
            
            {!!Form::close()!!}
            
    </tbody>
    @endforeach
</table>
{!!$personal->render("pagination::bootstrap-4")!!}
</div>
@stop