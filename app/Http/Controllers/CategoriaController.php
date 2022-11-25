<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //En el index se muestra la tabla Categoria
    public function index()
    {
       /* Select * from products (ELOQUEN ORM DE LARAVEL) */
       $categorias = categoria::all();
       //$carrera = carrera::where('nombre_cteg', "")->get();
       //return $carrera;
    
       return view('categoria.index'  ,compact('categorias'));
    }
    
    /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
    public function create()
        {
            return view('categoria.add');
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
                'nombre_categ' => 'required'],
            [
                'nombre_categ.required' =>'El campo esta vacio'
                
            ]);
            
        //return $request;
            $categoria=$request->all();
            
            categoria::create($categoria);

            return redirect('categorias')->with('message','exito');

        }


    
          /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $categoria = categoria::find($id);
    
            //return $categoria;
            return view('categoria.show', compact('categoria'));
    
        }
    
         /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function edit($id)
    {
        
        $categoria = Categoria::findOrFail($id);

        //return $categoria;
       return view('categoria.edit', compact('categoria'));
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
            $categoria = Categoria::findOrFail($id);

            $input = $request->all();
            
            $categoria->update($input);

            // return 'la categoria se modifico con exito';
            

            return redirect('categorias')->with('message','se modifico exito');
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
            $categoria = Categoria::findOrFail($id);

            $categoria->delete();

            // return 'El registro se elimno con exito';
            return redirect('categorias')->with('message','se elimino con exito');

        }
      }