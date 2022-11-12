@extends('layouts.app')

@section('content')
{

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