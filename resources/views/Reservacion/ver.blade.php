@extends('layouts.dashboard')
@section('content')
<div class="d-block bg-primary" style="padding-top: 30px; "  >
@include('alert.mensaje')
<table class="table table-hover table-inverse">
  <thead>
        <th class="text-center">Fecha</th>
        <th>Nombre</th>
        <th>Cedula</th>
        <th class="text-center">Direccion</th>
  </thead>
  @foreach($reservas as $reserva)
    <tbody class="text-center"> 
        <td>{{$reserva->created_at}}</td> 
        <td>{{$reserva->Nombre_Contacto}}</td>    
        <td>{{$reserva->Cedula_Cliente}}</td>  
        <td>{{$reserva->Direccion_Local}}</td> 
            {!!Form::open(['route'=>['personal.destroy',$reserva->ID_Reservacion],'method'=>'DELETE'])!!}
            <td>
            {!!link_to_route('reserva.edit', $title = 'Ver', $parameters = $reserva->ID_Reservacion, $attributes = ['class'=>'btn btn-primary'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            </td>
            
            {!!Form::close()!!}
            
    </tbody>
    @endforeach
</table>
{!!$reservas->render("pagination::bootstrap-4")!!}
</div>
@stop