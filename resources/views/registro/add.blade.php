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
                <h6 class="m-0 font-weight-bold text-primary">ALTA</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('registro') }}" method="POST">
            {{csrf_field()}}
                <label for=""> Fecha de prestamo:</label>
                <input class="form-control" type="date"  name="fecha_prest" value="{{old('fecha_prest')}}" class="@error('fecha_prest') is-invalid @enderror">
                @error('fecha_prest')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> Fecha de devolicion:</label>
                <input class="form-control" type="date"  name="fecha_devol" value="{{old('fecha_devol')}}" class="@error('fecha_devol') is-invalid @enderror">
                @error('fecha_devol')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> Dias Prestados:</label>
                <input class="form-control" type="number"  name="dias_pres" value="{{old('dias_pres')}}" class="@error('dias_pres') is-invalid @enderror">
                @error('dias_pres')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
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
                <a class="btn btn-danger m-3"  href="/registro" >Cancelar</a>
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

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