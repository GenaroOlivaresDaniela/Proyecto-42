<?php

namespace App\Http\Controllers;

use App\Models\libroregistro;
use App\Models\registro;
use Illuminate\Http\Request;

class LibroregistroController extends Controller
{
    public function index()
    {
      /* Select * from products (ELOQUEN ORM DE LARAVEL) */
      $libroregitro = libroregistro::all();
      //$categoria = categoria::where('nombre_cteg', "")->get();
      //return $categoria;

      return view('libroregistro.index'  ,compact('libroregiatro'));
    }
    public function add()
    {
       return view('libroregistro.edit');
    }
    public function edit()
    {
       return view('libroregistro.add');
    }
    public function show()
    {
       return view('libroregistro.show');
    }
    
}
