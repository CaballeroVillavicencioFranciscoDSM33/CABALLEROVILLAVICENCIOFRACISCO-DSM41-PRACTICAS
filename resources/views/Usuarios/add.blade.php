@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Altas Usuarios</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Usuario</h6>
            </div>
            <div class="card-body">
                    
            <form action="{{ url('usuarios') }}" method="post">
            {!! csrf_field() !!}
                <label > Correo:</label>
                <input class="form-control" type="text" id="correo" name="correo">
                <label for=""> Contraseña:</label>
                <input class="form-control" type="text" id="contraseña" name="contraseña">
                <div class="row">
                    <button type="submit" class="btn btn-primary m-3" value="save">Guadar</button>

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

@include('layouts.footer')