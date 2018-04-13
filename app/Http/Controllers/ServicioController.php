<?php

namespace Alquiler\Http\Controllers;

use Illuminate\Http\Request;
use Alquiler\Http\Requests;
use Alquiler\Http\Requests\ServicioAdd;
use Alquiler\Http\Requests\PersonalUpdate;
use Alquiler\Servicio;
use Redirect;
use Session;
use DB;

class ServicioController extends Controller
{
    public function index()
    { 
        $servicios=Servicio::paginate(3);
        return view('servicio.index',compact('servicios'));
    }
    public function store(ServicioAdd $request)
    { 
            Servicio::create([
            'ID_Servicio'=>"ID".$request['Nombre'],    
            'Nombre'=> $request['Nombre'],
        ]);

        Session::flash('message','Se agrego el servicio correctamente');
        return Redirect::to('/servicio/create');
    }

    public function destroy($id)
    {
        $servicio=Servicio::find($id);
        $servicio->delete();
        Session::flash('message','Servicio eliminado correctamente');
        return Redirect::to('/servicio');
    }
    public function edit($id)
    {
         $servicio=Servicio::find($id);//DB::table('cliente')->where('Cedula_Cliente','=',$Cedula_Cliente)->get()
         //dd($cliente->get(0));
         //dd($cliente);
         //return $cliente->Nombre;
         return view('servicio.edit',['servicio'=>$servicio]);
       // return Redirect::to('/editar');
    }
    public function update($id,ServicioAdd $request)
    {
        $servicio=Servicio::find($id);
        $servicio->fill($request->all());
        $servicio->save();
        Session::flash('message','Servicio editado correctamente');
        return Redirect::to('/servicio');
    }
    public function create()
    {
        return view('servicio.create',['message'=>""]);
    }
}
