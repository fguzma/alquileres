<?php

namespace Alquiler\Http\Controllers;

use Illuminate\Http\Request;
use Alquiler\Http\Requests;
use Alquiler\Http\Requests\ArticuloAdd;
use Alquiler\Http\Requests\PersonalUpdate;
use Alquiler\Inventario;
use Alquiler\Servicio;
use Redirect;
use Session;
use DB;
class InventarioController extends Controller
{
    public function index()
    { 
        $inventario=Inventario::paginate(10);
        return view('inventario.index',compact('inventario'));
    }
    public function store(ArticuloAdd $request)
    { 
            Inventario::create([
            'ID_Servicio'=>$request['ID_Servicio'],    
            'Nombre'=> $request['Nombre'],    
            'Estado'=> "Bueno",
            'Cantidad'=>$request['Cantidad'],
            'Costo_Alquiler'=>($request['Costo_Alquiler']),
            'Costo_Objeto'=> $request['Costo_Objeto'],
            'Disponibilidad'=> $request['options'],
        ]);

        $servicios=Servicio::all();
        Session::flash('message','Articulo Agregado correctamente');
        return Redirect('/inventario/create')->with('servicios',$servicios);
        //return view('inventario.create',['message'=>"Se agrego al usuario exitosamente",'servicios'=>$servicios]);
    }

    public function destroy($id)
    {
        $articulo=Inventario::find($id);
        $articulo->delete();
        Session::flash('message','Articulo eliminado correctamente');
        return Redirect::to('/inventario');
    }
    public function edit($id)
    {
         $articulo=Inventario::find($id);//DB::table('cliente')->where('Cedula_Cliente','=',$Cedula_Cliente)->get()
         //dd($cliente->get(0));
         //dd($cliente);
         //return $cliente->Nombre;
         $servicios=Servicio::all();
         return view('inventario.edit',['articulo'=>$articulo,'servicios'=>$servicios]);
       // return Redirect::to('/editar');
    }
    public function update($id,ArticuloAdd $request)
    {
        $articulo=Inventario::find($id);
        $articulo->fill($request->all());
        $articulo->save();
        Session::flash('message','Usuario editado correctamente');
        return Redirect::to('/inventario');
    }
    public function create()
    {
        $servicios=Servicio::all();
        return view('inventario.create',['message'=>"",'servicios'=>$servicios]);
    }
}