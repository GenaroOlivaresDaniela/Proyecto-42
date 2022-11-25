@include('Layouts.header')

@include('Layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">LIBRO</h1>
    
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
                
                <div class="modal-body">libro</div>
                
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                
                        <div class="card-header py-3">
                     
                           
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

                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
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
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
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
                                         
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
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
