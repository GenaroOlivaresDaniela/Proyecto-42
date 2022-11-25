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

            <form action="{{ url('usuario') }}" method="POST" >
            {{csrf_field()}}
                <label for=""> Nombre Completo Usuario:</label>
                <input class="form-control" type="text"  name="nombre_completo" value="{{old('nombre_completo')}}" class="@error('nombre_completo') is-invalid @enderror">
                @error('nombre_completo')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> telefono:</label>
                <input class="form-control" type="phone"  name="telefono" value="{{old('telefono')}}" class="@error('telefono') is-invalid @enderror">
                @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label for=""> Matricula:</label>
                <input class="form-control" type="numberBetween"  name="matricula" value="{{old('matricula')}}" class="@error('matricula') is-invalid @enderror">
                @error('matricula')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label for=""> Correo:</label>
                <input class="form-control" type="safeEmail"  name="correo" value="{{old('correo')}}" class="@error('correo') is-invalid @enderror">
                @error('correo')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label for=""> Contraseña:</label>
                <input class="form-control" type="text"  name="contraseña" value="{{old('contraseña')}}" class="@error('contraseña') is-invalid @enderror">
                @error('contraseña')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> Imagen:</label>
                <input class="form-control" type="ImageURL"  name="img_perfil" value="{{old('img_perfil')}}" class="@error('img_perfil') is-invalid @enderror">
                @error('img_perfil')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="row">
                <label for=""> carrera:</label>
                <select class="form-control form-select" aria-label="Default select example" name="carrera_id">
                <option selected>Seleciona la carrera</option>
                    @foreach($carreras as $carrera)
                    <option value={{$carrera->id}}>{{$carrera->nombre_carrera}}</option>
                    @endforeach
                </select>

                <label for=""> tipo de usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="type_id">
                <option selected>Seleciona el tipo de usuario</option>
                    @foreach($typeusers as $typeuser)
                    <option value={{$typeuser->id}}>{{$typeuser->name}}</option>
                    @endforeach
                </select>

                <label for=""> Cuatrimestre:</label>
                <select class="form-control form-select" aria-label="Default select example" name="cuatri_id">
                <option selected>Seleciona el cuatrimestre</option>
                    @foreach($cuatrimestres as $cuatrimestre)
                    <option value={{$cuatrimestre->id}}>{{$cuatrimestre->cuatrimestre}}</option>
                    @endforeach
                </select>
                <div class="row">
                <a class="btn btn-danger m-3"  href="/usuario" >Cancelar</a>
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