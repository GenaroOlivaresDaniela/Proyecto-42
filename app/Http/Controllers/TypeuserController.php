<?php

namespace App\Http\Controllers;

use App\Models\typeuser;
use Illuminate\Http\Request;

class TypeuserController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
   /* Select * from products (ELOQUEN ORM DE LARAVEL) */
   $typeusers = typeuser::all();
   //$carrera = carrera::where('nombre_cteg', "")->get();
   //return $carrera;

   return view('typeuser.index'  ,compact('typeusers'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        return view('typeuser.add');
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
            'name' => 'required'],
        [
            'name.required' =>'El campo esta vacio'
            
        ]);

        $typeuser=$request->all();
        typeuser::create($typeuser);

        return redirect('type')->with('message','exito');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeuser = typeuser::find($id);

        // return $typeuser;
        return view('typeuser.show', compact('typeuser'));

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $typeuser = typeuser::findOrFail($id); 
   return view('typeuser.edit', compact('typeuser'));
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
        $typeuser = typeuser::findOrFail($id);
        $input = $request->all();
        $typeuser->update($input);
        return redirect('type')->with('message','se modifico correcatamente');
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
        $typeuser = typeuser::findOrFail($id);
        $typeuser->delete();
            // return 'El registro se elimno con exito';

         return redirect('type')->with('message','se elimino con exito');
    }
    

}

