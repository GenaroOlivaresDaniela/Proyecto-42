<?php

namespace App\Http\Controllers;

use App\Models\libro;
use App\Models\registro;
use App\Models\usuario;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
   /* Select * from products (ELOQUEN ORM DE LARAVEL) */
   $registros = registro::Select('registros.id','registros.fecha_prest','registros.fecha_devol','registros.dias_pres','usuarios.nombre_completo','libros.titulo_libro')
   ->join('usuarios','usuarios.id','=','registros.usuario_id')
   ->join('libros','libros.id','=','registros.libro_id')->get();
// return $registros;  

   return view('registro.index'  ,compact('registros'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        $usuarios = usuario::all('id','nombre_completo');
        $libros = libro::all('id','titulo_libro');
        return view('registro.add', compact('usuarios','libros'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validacion = $request->validate([
            'fecha_prest' => 'required',
            'fecha_devol' => 'required',
            'dias_pres' => 'required'
        ],
            
        [
            'fecha_prest.required' =>'El campo esta vacio',
            'fecha_devol.required' => 'El campo esta vacio',
            'dias_pres.required' => 'El campo esta vacio'
            
        ]);
        //return
        $registro = $request->all();
        registro::create($registro);
        return redirect('registro')->with('message','exito');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $registro = registro::Select('registros.id','registros.fecha_prest','registros.fecha_devol','registros.dias_pres','usuarios.nombre_completo','libros.titulo_libro')
   ->join('usuarios','usuarios.id','=','registros.usuario_id')
   ->join('libros','libros.id','=','registros.libro_id')
   ->where('registros.id', $id)->first();

        // return $registro;
        return view('registro.show', compact('registro'))->with('registros', $registro);

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $usuarios = usuario::all('id','nombre_completo');
    $libros = libro::all('id','titulo_libro');
    $registro = registro::find($id);

   return view('registro.edit', compact('usuarios', 'libros','registro'));
}

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $registro = registro::findOrFail($id);
        $input = $request->all();
        $registro->update($input);
        return redirect('registro')->with('se modifico con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $registro = registro::findOrFail($id);
        $registro->delete();
        return redirect('registro')->with('se elemino correctamente');
    }
    

}

