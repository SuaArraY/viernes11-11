@extends('layouts.app')

@section('content')
{{-- <h3>Listado de Tareas</h3> --}}


{{-- <div class=" container shadow p-3 mb-5 bg-white rounded">
    <table  class="table table-stripped table-hover ">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
    
           
        </tbody>
    </table> 
</div> --}}

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-light">Lista de Usuarios</div>

                <div class="card-body ">
                    <table  class="table table-stripped table-hover ">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                           
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection