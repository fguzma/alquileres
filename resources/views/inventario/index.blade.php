@extends('layouts.dashboard')
@section('content')
<div class="d-block bg-primary" style="padding-top: 30px; "  >
@include('alert.mensaje')
<table class="table table-hover table-inverse">
  <thead >
        <th class="text-center">Servicio</th>
        <th class="text-center">Nombre</th>
        <th>Cantidad</th>
        <th>Estado</th>
        <th>Costo_Alquiler</th>
        <th>Costo_Objeto</th>
        <th>Disponibilidad</th>
  </thead>
  @foreach($inventario as $item)
    <tbody class="text-center"> 
        <td >{{$item->ID_Servicio}}</td> 
        <td >{{$item->Nombre}}</td>    
        <td>{{$item->Cantidad}}</td>  
        <td>{{$item->Estado}}</td>  
        <td>{{$item->Costo_Alquiler}}</td>  
        <td>{{$item->Costo_Objeto}}</td>  
        <td>{{$item->Disponibilidad}}</td>
            <td>
            {!!link_to_route('inventario.edit', $title = 'Editar', $parameters = $item->ID_Objeto, $attributes = ['class'=>'btn btn-primary'])!!}
            
            </td>
            <td>
            {!!Form::open(['route'=>['inventario.destroy',$item->ID_Objeto],'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
            </td>
            
            
    </tbody>
    @endforeach
</table>
{{$inventario->render("pagination::bootstrap-4")}}
</div>
@stop