@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pacientes</h1>

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
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el paciente?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Informacion del paciente</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/pacientes">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
            @include('components.flash_alerts')   
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista De Pacientes</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="pacientes/create"><i class="fa-solid fa-layer-group"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Fecha de Nacimiento</th>
                                            <th>Edad</th>
                                            <th>Sexo</th>
                                            <th>Domicilio</th>
                                            <th>Codigo Postal</th>
                                            <th>Escolaridad</th>
                                            <th>Ocupacion</th>
                                            <th>Religion</th>
                                            <th>Estado Civil</th>
                                            <th>Telefono</th>
                                            <th>Alergias</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                    @foreach($pacientes as $paciente)
                                        <tr>
                                            <td>{{$paciente->id}}</td>
                                            <td>{{$paciente->nombre_completo}}</td>
                                            <td>{{$paciente->fecha_nacimiento}}</td>
                                            <td>{{$paciente->edad}}</td>
                                            <td>{{$paciente->sexo}}</td>
                                            <td>{{$paciente->domicilio}}</td>
                                            <td>{{$paciente->codigo_postal}}</td>
                                            <td>{{$paciente->escolaridad}}</td>
                                            <td>{{$paciente->ocupacion}}</td>
                                            <td>{{$paciente->religion}}</td>
                                            <td>{{$paciente->estado_civil}}</td>
                                            <td>{{$paciente->telefono}}</td>
                                            <td>{{$paciente->alergias}}</td>
                                            <td>    
                                            <div class="btn-group" role="paciente" aria-label="Basic mixed styles example">
                                                        <a class="btn btn-success m-3" href="pacientes/{{$paciente->id}}" ><i class="fa-regular fa-eye"></i></a>
                                                        <a class="btn btn-warning m-3" href="pacientes/{{$paciente->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form action="pacientes/{{$paciente->id}}" method="POST">
                                                        {!! csrf_field() !!}
                                                        @method("delete")
                                                            
                                                        <button class="btn btn-danger m-3" type="submit"><i class="fa-solid fa-trash"></i></button>
                                                        </form>

<!--                                                         <a class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
 -->                                            </div>            
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')

