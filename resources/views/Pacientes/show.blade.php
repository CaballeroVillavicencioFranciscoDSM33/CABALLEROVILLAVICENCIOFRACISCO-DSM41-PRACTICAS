@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pacientes Información</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Pacientes</h6>
            </div>
            <div class="card-body">
             <h5 class="card-title"> Nombre: {{ $pacientes->nombre_completo }}</h5>
             <h6 class="card-text">Fecha de Nacimiento: {{ $pacientes->fecha_nacimiento }}</h6>
             <h6 class="card-text"> Edad: {{ $pacientes->edad }}</h6>
             <h6 class="card-text">Sexo: {{ $pacientes->sexo }}</h6>
             <h6 class="card-text"> Domicilio: {{ $pacientes->domicilio }}</h6>
             <h6 class="card-text">Codigo Postal: {{ $pacientes->codigo_postal }}</h6>
             <h6 class="card-text"> Escolaridad: {{ $pacientes->escolaridad }}</h6>
             <h6 class="card-text">Ocupacion: {{ $pacientes->ocupacion }}</h6>
             <h6 class="card-text"> Religion: {{ $pacientes->religion }}</h6>
             <h6 class="card-text">Estado_civil: {{ $pacientes->estado_civil }}</h6>
             <h6 class="card-text"> Telefono: {{ $pacientes->telefono }}</h6>
             <h6 class="card-text">Alergias: {{ $pacientes->alergias }}</h6>
             <a class="btn btn-outline-success" href="/pacientes" ><i class="fa-solid fa-arrow-left"></i></a>
            </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')