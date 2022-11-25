@include('Layouts.header')

@include('Layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">CATEGORIA</h1>
    
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
               
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                
                        <div class="card-header py-3">
                       <h3 class="m-1 font-weight-bold text-primary">LISTA CATEGORIA</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="categorias/create"><i class="bi bi-file-plus"></i>+</a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre_categoria</th>
                                            <th>operaciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Id</th>
                                            <th>Nombre_categoria</th>
                                            <th>operaciones</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($categorias as $categoria)
                                        <tr>
                                            <td>{{$categoria->id}}</td>
                                            <td>{{$categoria->nombre_categ}}</td>
                                            <td>
                                            <div class="row col-12">
                                                    <div class="col-4">                                                
                                                        <a class="btn btn-success m-3" href="categorias/{{$categoria->id}}"  ><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3" href="/categorias/{{$categoria->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <form action="categorias/{{$categoria->id}}" method="POST">
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
