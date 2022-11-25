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
            <form action="{{ url('type') }}" method="POST" >
            {{csrf_field()}}
                <div clasd="form-group">
                <label for=""> Tipo de Usuario:</label>
                <input class="form-control" type="text"  name="name" value="{{old('name')}}" class="@error('name') is-invalid @enderror">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
               
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