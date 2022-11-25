@include('Layouts.header')
@include('Layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    
   
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EDITAR</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('registro/'.$registro->id)}}" method="POST" >
            @csrf
                @method("PATCH")
                <input class="form-control" type="text" value="{{$registro->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Fecha de prestamo:</label>
                <input class="form-control" type="date" value='{{$registro->fecha_prest}}' name='fecha_prest'>
                <label for=""> Fecha de devolicion:</label>
                <input class="form-control" type="date" value='{{$registro->fecha_devol}}' name='fecha_devol'>
                <label for=""> Dias Prestados:</label>
                <input class="form-control" type="number" value='{{$registro->dias_pres}}' name='dias_pres'>
                <label for=""> Usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="usuario_id">
                <option selected>Seleciona el usuario</option>
                    @foreach($usuarios as $usuario)
                    <option value={{$usuario->id}}>{{$usuario->nombre_completo}}</option>
                    @endforeach
                </select>
                 <label for=""> Libro:</label>
                 <select class="form-control form-select" aria-label="Default select example" name="libro_id">
                <option selected>Seleciona el libro</option>
                    @foreach($libros as $libro)
                    <option value={{$libro->id}}>{{$libro->titulo_libro}}</option>
                    @endforeach
                </select>  
                <div class="row">
                    <button type="submit" class="btn btn-primary m-3">GUARDAR CAMBIOS</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('Layouts.footer')