<?php

namespace Alquiler\Http\Controllers;

use Illuminate\Http\Request;
use Alquiler\Http\Controllers\Controller;
use Alquiler\Http\Requests;
use Alquiler\Http\Requests\clienteAdd;
use Alquiler\Http\Requests\clienteUpdate;
use Alquiler\Cliente;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Redirect;
use Session;
use DB;
class ClienteController extends Controller
{

    public function index()
    { 
        $clientes=Cliente::paginate(10);
        return view('cliente.index',compact('clientes'));
    }
    public function store(clienteAdd $request)
    { 
            Cliente::create([
            'Cedula_Cliente'=>$request['Cedula_Cliente'],    
            'Nombre'=> $request['Nombre'],
            'Apellido'=>$request['Apellido'],
            'Edad'=>($request['Edad']),
            'Sexo'=> $request['Sexo'],
        ]);
        //return Redirect::to('/users');
        return redirect('/cliente/create')->with('message',"Se agrego al cliente correctamente");
    }

    public function destroy($id)
    {
        $usuario=cliente::find($id);
        $usuario->delete();
        Session::flash('message','Cliente eliminado correctamente');
        return Redirect::to('/cliente');
    }
    public function edit($Cedula_Cliente)
    {
         $cliente=Cliente::find($Cedula_Cliente);//DB::table('cliente')->where('Cedula_Cliente','=',$Cedula_Cliente)->get()
         //dd($cliente->get(0));
         //dd($cliente);
         //return $cliente->Nombre;
         return view('cliente.edit',['cliente'=>$cliente]);
       // return Redirect::to('/editar');
    }
    public function update($cedula,clienteUpdate $request)
    {
        $usuario=cliente::find($cedula);
        $usuario->fill($request->all());
        $usuario->save();
        Session::flash('message','Cliente editado correctamente');
        return Redirect::to('/cliente');
    }
    public function create()
    {
        return view('cliente.create',['message'=>""]);
    }
}
