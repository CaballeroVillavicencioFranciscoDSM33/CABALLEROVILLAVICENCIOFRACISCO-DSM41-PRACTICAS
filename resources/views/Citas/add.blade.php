@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Citas Altas</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Citas</h6>
            </div>
            <div class="card-body">
                    
            <form action="{{ url('citas') }}" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for=""> Especialista Asignado:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="especialista_id">
                    <option selected>Elige el nombre del especialista</option>
                        @foreach($especialistas as $especialista)   
                    <option value={{$especialista->id}}>{{$especialista->nombre_completo}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for=""> Paciente Asignado:</label>
                        <select class="form-control form-select" aria-label="Default select example" name="paciente_id">
                        <option selected>Elige el nombre del paciente</option>
                            @foreach($pacientes as $paciente)   
                        <option value={{$paciente->id}}>{{$paciente->nombre_completo}}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""> Servicio Asignado:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="servicio_id">
                            <option selected>Elige el nombre del cervicio</option>
                                @foreach($servicios as $servicio)   
                            <option value={{$servicio->id}}>{{$servicio->nombre_servicio}}</option>
                               @endforeach
                            </select>
                        </div>
                <label > Fecha y Hora:</label>
                <input class="form-control" type="text" id="fecha_hora" name="fecha_hora">
                
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