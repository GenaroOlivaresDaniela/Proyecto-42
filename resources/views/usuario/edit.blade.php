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
                
            <form action="{{url('usuario/'.$usuario->id)}}" method="POST">
                @csrf
                @method("PATCH")
                <input class="form-control" type="text" value="{{$usuario->id}}" aria-label="Disabled input example" disabled>
            <label for=""> Nombre Completo Usuario:</label>
                <input class="form-control" type="text" value="{{$usuario->nombre_completo}}" name="nombre_completo">
                <label for=""> telefono:</label>
                <input class="form-control" type="phone" value="{{$usuario->telefono}}" name="telefono">   
                <label for=""> Matricula:</label>
                <input class="form-control" type="numberBetween" value="{{$usuario->matricula}}" aria-label="Disabled input example" disabled>
                <label for=""> Correo:</label>
                <input class="form-control" type="safeEmail" value="{{$usuario->correo}}" name="correo">
                <label for=""> Contraseña:</label>
                <input class="form-control" type="text" value="{{$usuario->contraseña}}" name="contraseña">
                <label for=""> Imagen:</label>
                <input class="form-control" type="ImageURL" value="{{$usuario->img_perfil}}" name="img_perfil">
                <div class="row">
                <label for=""> carrera:</label>
                <select class="form-control form-select" aria-label="Default select example" name="carrera_id">
                    <option>Seleciona la carrera</option>
                    @foreach($carreras as $carrera)
                    <option value={{$carrera->id}}>{{$carrera->nombre_carrera}}</option>
                    @endforeach
                </select>
                <label for=""> tipo de usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="type_id">
                    <option>Seleciona el tipo</option>
                    @foreach($typeusers as $typeuser)
                    <option value={{$typeuser->id}}>{{$typeuser->name}}</option>
                    @endforeach
                </select>
                 <label for=""> Cuatrimestre:</label>
                 <select class="form-control form-select" aria-label="Default select example" name="cuatri_id">
                    <option>Seleciona el cuatrimestre</option>
                    @foreach($cuatrimestres as $cuatrimestre)
                    <option value={{$cuatrimestre->id}}>{{$cuatrimestre->cuatrimestre}}</option>
                    @endforeach
                </select>
                 <div class="row">
                <a class="btn btn-danger m-3"  href="/libros" >CANCELAR</a>
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