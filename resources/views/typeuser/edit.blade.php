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
                
            <form action="{{url('type/'.$typeuser->id)}}" method="POST">
            @csrf
            @method("PATCH")
            <input class="form-control" type="text" value="{{$typeuser->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Tipo de usuario:</label>
                <input class="form-control" type="text"  value='{{$typeuser->name}}' name='name'>
               
                <div class="row">
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