@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Especialistas Editar</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Especialistas</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('especialistas/' .$especialistas->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$especialistas->id}}" aria-label="Disabled input example" disabled>

                <label for=""> Correo Asignado:</label>
                <select class="form-control form-select" aria-label="Default select example" id="usuario_id" name="usuario_id" value="{{$especialistas->usuario_id}}">
                    <option selected>Elige el Correo del Especialista</option>
                        @foreach($usuarios as $usuario)
                    <option value={{$usuario->id}}>{{$usuario->correo}}</option>
                       @endforeach
                    </select>
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="nombre_completo" name="nombre_completo" value="{{$especialistas->nombre_completo}}">
                <label for=""> Apellido:</label>
                <input class="form-control" type="text" id="telefono" name="telefono" value="{{$especialistas->telefono}}">
                <label for=""> Direccion:</label>
                <input class="form-control" type="text" id="direccion" name="direccion" value="{{$especialistas->direccion}}">
                <label for=""> Descripcion:</label>
                <input class="form-control" type="text" id="descripcion" name="descripcion" value="{{$especialistas->descripcion}}">
                
               
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/especialistas" >Cancelar</a>
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