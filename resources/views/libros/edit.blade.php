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
                
            <form action="{{url('libros/'.$libro->id)}}" method="POST" >
                @csrf
                @method("PATCH")
                <input class="form-control" type="text" value="{{$libro->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Titulo:</label>
                <input class="form-control" type="text" value='{{$libro->titulo_libro}}' name="titulo_libro">
                <label for=""> Autor:</label>
                <input class="form-control" type="text" value='{{$libro->nombre_autor}}' name="nombre_autor">
                <label for=""> Categoria:</label>
                <select class="form-control form-select" aria-label="Default select example" name="categoria_id">
                    <option>Seleciona la categoria</option>
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