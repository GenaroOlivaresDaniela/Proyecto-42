<?php

namespace App\Http\Controllers;

use App\Models\carrera;
use App\Models\cuatrimestre;
use App\Models\typeuser;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UsuarioController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
   /* Select * from products (ELOQUEN ORM DE LARAVEL) */
   $usuarios = usuario::Select('usuarios.id','usuarios.nombre_completo','usuarios.telefono','usuarios.matricula','usuarios.correo','usuarios.contraseña','usuarios.img_perfil','carreras.nombre_carrera','typeusers.name','cuatrimestres.cuatrimestre')
   ->join('carreras','carreras.id', '=', 'usuarios.carrera_id')
   ->join('typeusers','typeusers.id', '=', 'usuarios.type_id')
   ->join('cuatrimestres','cuatrimestres.id', '=', 'usuarios.cuatri_id')->get();
   return view('usuario.index'  ,compact('usuarios'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        $carreras = carrera::all('id','nombre_carrera');
        $typeusers = typeuser::all('id','name');
        $cuatrimestres = cuatrimestre::all('id','cuatrimestre');
        return view('usuario.add', compact('carreras', 'typeusers', 'cuatrimestres'));
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
            'nombre_completo' => 'required',
            'telefono' => 'required|max:10',
            'matricula' => 'required|max:9',
            'correo' => 'required',
            'contraseña' => 'required',
            'img_perfil' => 'required'
            

        ],
            
        [
            'nombre_completo.required' =>'El campo esta vacio',
            'telefono' => 'El campo esta vacio',
            'matricula.required' => 'El campo esta vacio',
            'correo.required' => 'El campo esta vacio',
            'contraseña.required' => 'El campo esta vacio',
            'img_perfil.required' => 'El campo esta vacio'
            
        ]);
        $usuario = $request->all();
        usuario::create($usuario);
        return redirect('usuario')->with('message','exito');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = usuario::Select('usuarios.id','usuarios.nombre_completo','usuarios.telefono','usuarios.matricula','usuarios.correo','usuarios.contraseña','usuarios.img_perfil','carreras.nombre_carrera','typeusers.name','cuatrimestres.cuatrimestre')
   ->join('carreras','carreras.id', '=', 'usuarios.carrera_id')
   ->join('typeusers','typeusers.id', '=', 'usuarios.type_id')
   ->join('cuatrimestres','cuatrimestres.id', '=', 'usuarios.cuatri_id')
   ->Where('usuarios.id', $id)->first();
        return view('usuario.show', compact('usuario'))->with('libros', $usuario);

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $carreras = carrera::all('id','nombre_carrera');
    $typeusers = typeuser::all('id','name');
    $cuatrimestres = cuatrimestre::all('id','cuatrimestre');
    $usuario = usuario::find($id);
   return view('usuario.edit', compact('carreras','typeusers','cuatrimestres','usuario'));
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
        $usuario = usuario::findOrFail($id);
        $input = $request->all();
        $usuario->update($input);
        return redirect('usuario')->with('se modifico con exito');
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
        $usuario = usuario::findOrFail($id);
        $usuario->delete();
        return redirect('usuario')->with('se elimino correctamente');
    }


   
    

}