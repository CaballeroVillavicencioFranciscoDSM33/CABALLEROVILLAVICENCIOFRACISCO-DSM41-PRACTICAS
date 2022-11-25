@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pacientes Altas</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Alta Paciente</h6>
            </div>
            <div class="card-body">
                    
            <form action="{{ url('pacientes') }}" method="post">
            {!! csrf_field() !!}
                <label > Nombre:</label>
                <input class="form-control" type="text" id="nombre_completo" name="nombre_completo">
                <label for=""> Fecha de nacimiento:</label>
                <input class="form-control" type="text" id="fecha_nacimiento" name="fecha_nacimiento">
                <label > Edad:</label>
                <input class="form-control" type="text" id="edad" name="edad">
                <label for=""> Sexo:</label>
                <input class="form-control" type="text" id="sexo" name="sexo">
                <label > Domicilio:</label>
                <input class="form-control" type="text" id="domicilio" name="domicilio">
                <label for=""> Codigo Postal:</label>
                <input class="form-control" type="text" id="codigo_postal" name="codigo_postal">
                <label > Escolaridad:</label>
                <input class="form-control" type="text" id="escolaridad" name="escolaridad">
                <label for=""> Ocupacion:</label>
                <input class="form-control" type="text" id="ocupacion" name="ocupacion">
                <label > Religion:</label>
                <input class="form-control" type="text" id="religion" name="religion">
                <label for=""> Estado Civil:</label>
                <input class="form-control" type="text" id="estado_civil" name="estado_civil">
                <label > Telefono:</label>
                <input class="form-control" type="text" id="telefono" name="telefono">
                <label for=""> Alergias:</label>
                <input class="form-control" type="text" id="alergias" name="alergias">
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