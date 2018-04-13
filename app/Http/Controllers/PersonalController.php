<?php

namespace Alquiler\Http\Controllers;

use Illuminate\Http\Request;
use Alquiler\Http\Requests;
use Alquiler\Http\Requests\PersonalAdd;
use Alquiler\Http\Requests\PersonalUpdate;
use Alquiler\personal;
use Redirect;
use Session;
use DB;

class PersonalController extends Controller
{
    public function index()
    { 
        $personal=Personal::paginate(2);
        return view('personal.index',compact('personal'));
    }
    public function store(PersonalAdd $request)
    { 
            Personal::create([
            'Cedula_Personal'=>$request['Cedula_Personal'],    
            'Nombre'=> $request['Nombre'],
            'Apellido'=>$request['Apellido'],
            'Direccion'=>($request['Direccion']),
            'Fecha_Nac'=> $request['Fecha_Nac'],
        ]);

        return redirect('/personal/create')->with('message',"Se agrego al trabajador correctamente");//view('personal.create',['message'=>"Se agrego al usuario exitosamente"]);
    }

    public function destroy($id)
    {
        $usuario=personal::find($id);
        $usuario->delete();
        Session::flash('message','Trabajador eliminado correctamente');
        return Redirect::to('/personal');
    }
    public function edit($Cedula_Cliente)
    {
         $trabajador=personal::find($Cedula_Cliente);//DB::table('cliente')->where('Cedula_Cliente','=',$Cedula_Cliente)->get()
         //dd($cliente->get(0));
         //dd($cliente);
         //return $cliente->Nombre;
         return view('personal.edit',['trabajador'=>$trabajador]);
       // return Redirect::to('/editar');
    }
    public function update($cedula,PersonalUpdate $request)
    {
        $usuario=personal::find($cedula);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect('/personal')->with('message',"Se edito al trabajador exitosamente");//view('personal.create',['message'=>"Se agrego al usuario exitosamente"]);
    }
    public function create()
    {
        return view('personal.create',['message'=>""]);
    }
}
