<?php

namespace App\Http\Controllers;

use App\Models\carrera;
use App\Models\categoria;
use Database\Factories\CarreraFactory;
use Illuminate\Http\Request;

class CarreraController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
   /* Select * from products (ELOQUEN ORM DE LARAVEL) */
   $carreras = carrera::all();
   //$carrera = carrera::where('nombre_cteg', "")->get();
   //return $carrera;

   return view('carrera.index'  ,compact('carreras'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        return view('carrera.add');
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
            'nombre_carrera' => 'required'],
        [
            'nombre_carrera.required' =>'El campo esta vacio'
            
        ]);

        $carrera=$request->all();
            
        carrera::create($carrera);

        return redirect('carrera')->with('message','exito');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrera = carrera::find($id);

        // return $carrera;
        return view('carrera.show', compact('carrera'));

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $carrera = Carrera::findOrFail($id);
    //return $categoria;
   return view('carrera.edit', compact('carrera'));
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
        $carrera = carrera::findOrFail($id);
        $input=$request->all();
            
            $carrera->update($input);

            return redirect('carrera')->with('message','se modifico exito');
        //
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
        $carrera = carrera::findOrFail($id);
        $carrera->delete();
        return redirect('carrera')->with('message','se elimino exito');


    }
    

}

