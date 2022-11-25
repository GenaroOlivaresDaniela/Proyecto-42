@include('Layouts.header')

@include('Layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">USUARIOS</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el usuario?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Usuario</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/usuario">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
               
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">LISTA USUAIROS</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="usuario/create"><i class="bi bi-file-plus"></i>+</a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>nombre</th>
                                            <th>telefono</th>
                                            <th>matricula</th>
                                            <th>correo</th>
                                            <th>contraseña</th>
                                            <th>imagen</th>
                                            <th>carrera</th>
                                            <th>tipo_usuario</th>
                                            <th>cuatrimestre</th>
                                            <th>operaciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                        <th>Id</th>
                                            <th>nombre</th>
                                            <th>telefono</th>
                                            <th>matricula</th>
                                            <th>correo</th>
                                            <th>contraseña</th>
                                            <th>imagen</th>
                                            <th>carrera</th>
                                            <th>tipo_usuario</th>
                                            <th>cuatrimestre</th>
                                            <th>operaciones</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($usuarios as $usuario)
                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->nombre_completo}}</td>
                                            <td>{{$usuario->telefono}}</td>
                                            <td>{{$usuario->matricula}}</td>
                                            <td>{{$usuario->correo}}</td>
                                            <td>{{$usuario->contraseña}}</td>
                                            <td>{{$usuario->img_perfil}}</td>
                                            <td>{{$usuario->nombre_carrera}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->cuatrimestre}}</td>
                                            
                                            <td>
                                            <div class="row col-12">
                                                    <div class="col-4">                                                
                                                        <a class="btn btn-success m-3" href="usuario/{{$usuario->id}}"  ><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3" href="usuario/{{$usuario->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                    <form action="usuario/{{$usuario->id}}" method="POST">
                                                        @csrf
                                                        @method("delete")
                                                        <button type="submit" class="btn btn-danger m-3"><i class="fa-solid fa-trash"></i></button>
                                                        </form>                                               
                                                           </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   
          
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('Layouts.footer')
