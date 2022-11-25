@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Citas Editar</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Citas</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('citas/' .$citas->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$citas->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Especialista Asignado:</label>
                <select class="form-control form-select" aria-label="Default select example" id="especialista_id" name="especialista_id" value="{{$citas->especialista_id}}">
                    <option selected>Elige el nombre del especialista</option>
                        @foreach($especialistas as $especialista)
                    <option value={{$especialista->id}}>{{$especialista->nombre_completo}}</option>
                       @endforeach
                    </select>
                    <label for=""> Paciente Asignado:</label>
                    <select class="form-control form-select" aria-label="Default select example" id="paciente_id" name="paciente_id" value="{{$citas->paciente_id}}">
                        <option selected>Elige el nombre del paciente</option>
                            @foreach($pacientes as $paciente)
                        <option value={{$paciente->id}}>{{$paciente->nombre_completo}}</option>
                           @endforeach
                        </select>
                        <label for=""> Servicio Asignado:</label>
                        <select class="form-control form-select" aria-label="Default select example" id="servicio_id" name="servicio_id" value="{{$citas->servicio_id}}">
                            <option selected>Elige el nombre del servicio</option>
                                @foreach($servicios as $servicio)
                            <option value={{$servicio->id}}>{{$servicio->nombre_servicio}}</option>
                               @endforeach
                            </select>
                <label for=""> Fecha y Hora:</label>
                <input class="form-control" type="text" id="fecha_hora" name="fecha_hora" value="{{$citas->fecha_hora}}">
                
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/citas" >Cancelar</a>
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