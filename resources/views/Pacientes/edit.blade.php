@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pacientes Editar</h1>

</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Pacientes</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('pacientes/' .$pacientes->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$pacientes->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="nombre_completo" name="nombre_completo" value="{{$pacientes->nombre_completo}}">
                <label for=""> Fecha de Nacimiento:</label>
                <input class="form-control" type="text" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$pacientes->fecha_nacimiento}}">
                <label for=""> Edad:</label>
                <input class="form-control" type="text" id="edad" name="edad" value="{{$pacientes->edad}}">
                <label for=""> Sexo:</label>
                <input class="form-control" type="text" id="sexo" name="sexo" value="{{$pacientes->sexo}}">
                <label for=""> Domicilio:</label>
                <input class="form-control" type="text" id="domicilio" name="domicilio" value="{{$pacientes->domicilio}}">
                <label for=""> Codigo Postal:</label>
                <input class="form-control" type="text" id="codigo_postal" name="codigo_postal" value="{{$pacientes->codigo_postal}}">
                <label for=""> Escolaridad:</label>
                <input class="form-control" type="text" id="escolaridad" name="escolaridad" value="{{$pacientes->escolaridad}}">
                <label for=""> Ocupacion:</label>
                <input class="form-control" type="text" id="ocupacion" name="ocupacion" value="{{$pacientes->ocupacion}}">
                <label for=""> Religion:</label>
                <input class="form-control" type="text" id="religion" name="religion" value="{{$pacientes->religion}}">
                <label for=""> Etsado Civil:</label>
                <input class="form-control" type="text" id="estado_civil" name="estado_civil" value="{{$pacientes->estado_civil}}">
                <label for=""> Telefono:</label>
                <input class="form-control" type="text" id="telefono" name="telefono" value="{{$pacientes->telefono}}">
                <label for=""> Alergias:</label>
                <input class="form-control" type="text" id="alergias" name="alergias" value="{{$pacientes->alergias}}">
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/pacientes" >Cancelar</a>
                    <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>
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