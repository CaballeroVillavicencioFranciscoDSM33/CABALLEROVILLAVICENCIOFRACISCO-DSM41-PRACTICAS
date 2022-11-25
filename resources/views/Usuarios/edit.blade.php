@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Usuarios</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Usuarios</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('usuarios/' .$usuarios->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$usuarios->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Correo:</label>
                <input class="form-control" type="text" id="correo" name="correo" value="{{$usuarios->correo}}">
                <label for=""> Contraseña:</label>
                <input class="form-control" type="text" id="contraseña" name="contraseña" value="{{$usuarios->contraseña}}">
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/usuarios" >Cancelar</a>
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