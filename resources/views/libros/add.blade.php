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
                
            @if($errors->any())

            @endif
            <form action="{{ url('libros') }}" method="POST" >
            {{csrf_field()}}
                <div clasd="form-group">
                <label for=""> Titulo:</label>
                <input class="form-control" type="text"  name="titulo_libro" value="{{old('titulo_libro')}}" class="@error('titulo_libro') is-invalid @enderror">
                @error('titulo_libro')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> Autor:</label>
                <input class="form-control" type="text"  name="nombre_autor" value="{{old('nombre_autor')}}" class="@error('nombre_autor') is-invalid @enderror">
                @error('nombre_autor')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> Categoria:</label>
                <select class="form-control form-select" aria-label="Default select example" name="categoria_id">
                    <option  selected>Seleciona la categoria</option>
                    @foreach($categorias as $categoria)
                    <option value={{$categoria->id}}>{{$categoria->nombre_categ}}</option>
                    @endforeach
                </select>
                
               
                <div class="row">
                <a class="btn btn-danger m-3"  href="/libros" >Cancelar</a>
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