<?php

namespace App\Http\Controllers;

use App\Models\cuatrimestre;
use Illuminate\Http\Request;

class CuatrimestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
   /* Select * from products (ELOQUEN ORM DE LARAVEL) */
   $cuatrimestres = cuatrimestre::all();
   //$carrera = carrera::where('nombre_cteg', "")->get();
   //return $carrera;

   return view('cuatrimestre.index'  ,compact('cuatrimestres'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        return view('cuatrimestre.add');
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
            'cuatrimestre' => 'required|string'],
        [
            'cuatrimestre.required' =>'El campo esta vacio'
            
        ]);
        $cuatrimestre=$request->all();
        cuatrimestre::create($cuatrimestre);

        return redirect('cuatrimestre')->with('message','exito');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuatrimestre = cuatrimestre::find($id);

        // return $cuatrimestre;
        return view('cuatrimestre.show', compact('cuatrimestre'));

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $cuatrimestre = cuatrimestre::findOrFail($id);
   return view('cuatrimestre.edit', compact('cuatrimestre'));
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
        $cuatrimestre = cuatrimestre::findOrFail($id);
        $input = $request->all();
        $cuatrimestre->update($input);
        return redirect('cuatrimestre')->with('message','se modifico exitasamente');
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
        $cuatrimestre = cuatrimestre::findOrFail($id);
        $cuatrimestre->delete();
                    //  return 'El registro se elimno con exito';
        return redirect('cuatrimestre')->with('message','se elimino con exito');

    }
    

}

