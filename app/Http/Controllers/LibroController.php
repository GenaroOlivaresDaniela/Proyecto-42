<?php

namespace App\Http\Controllers;
/* Debmos de mandar a a importar el modelo de catrgorias para acceder a los datos */
use App\Models\categoria;
use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
   /* Select * from products (ELOQUEN ORM DE LARAVEL) */
    $libros = libro::Select('libros.id','libros.titulo_libro','libros.nombre_autor','categorias.nombre_categ')
   ->join('categorias','categorias.id','=','libros.categoria_id')->get();




   //$libros = libro::all();
   //return $libros;
   //$carrera = carrera::where('nombre_cteg', "")->get();
   //return $carrera;

   return view('libros.index'  ,compact('libros'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
/* la funcion create es para retornas nuestra vista y pasar valores como llaver foraneas */
    {
    /* Obtenemos todas las categorias  */
        $categorias= categoria::all('id','nombre_categ');
       
        //return $categoria;
        return view('libros.add', compact('categorias'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        /* la funcion stores es donde ponemos toda nuestra logica  y obtenemos nuestros datos del formulario para posteriomente guardarlos */
        //
        $validacion = $request->validate([
            'titulo_libro' => 'required',
            'nombre_autor' => 'required',
            'categoria_id' => 'required'
        ],
            
        [
            'titulo_libro.required' =>'El campo esta vacio',
            'nombre_autor.required' => 'El campo esta vacio',
            'nombre_categ.required' => 'El campo esta vacio'
            
        ]);
        //return $request;
        $libro=$request->all();
        libro::create($libro);
        return redirect('libros')->with('message','exito');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function show($id)
    {
       
         $libro = libro::Select('libros.id','libros.titulo_libro','libros.nombre_autor','categorias.nombre_categ')
         ->join('categorias','categorias.id','=','libros.categoria_id')
     ->Where('libros.id', $id)->first();
    //   return $id;
    
    return view('libros.show', compact('libro'))->with('libros', $libro);
      

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $categorias = categoria::all('id','nombre_categ');
    $libro =libro::find($id);
   return view('libros.edit', compact('categorias','libro'));
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
        //return $request;
        //
        

        $libro = libro::findOrFail($id);
        $input = $request->all();

        //return $input;

        $libro->update($input);
        return redirect('libros')->with('se modifico con exito');
        
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
        $libro = libro::findOrFail($id);
        $libro->delete();
        return redirect('libros')->with('message','se elimino con exito');

    }
    

}

