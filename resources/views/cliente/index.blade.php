@extends('layouts.dashboard')
@section('content')
<div class="d-block bg-primary" style="padding-top: 30px; "  >
@include('alert.mensaje')
<table class="table table-hover table-inverse">
  <thead>
        <th class="text-center">Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Sexo</th>
  </thead>
  @foreach($clientes as $cliente)
    <tbody> 
        <td class="text-center">{{$cliente->Cedula_Cliente}}</td> 
        <td>{{$cliente->Nombre}}</td>    
        <td>{{$cliente->Apellido}}</td>  
        <td>{{$cliente->Edad}}</td>  
        <td>{{$cliente->Sexo}}</td>  
            {!!Form::open(['route'=>['cliente.destroy',$cliente->Cedula_Cliente],'method'=>'DELETE'])!!}
            <td>
            {!!link_to_route('cliente.edit', $title = 'Editar', $parameters = $cliente->Cedula_Cliente, $attributes = ['class'=>'btn btn-primary'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            </td>
            
            {!!Form::close()!!}
            
    </tbody>
    @endforeach
</table>
</div>
{{$clientes->render("pagination::bootstrap-4")}}
@stop