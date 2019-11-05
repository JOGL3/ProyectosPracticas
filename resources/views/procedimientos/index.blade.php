@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <div class="row">
        <div class="col-xl-6">
            <a href="{{url('proce/create')}}" class="btn btn-primary">Registrar Procedimiento</a>
        </div>
        <div class="col-xl-6">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Verificación de Procedimientos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>Codigo</th>
                    <th>Siglas</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                   <td>0</td>
                   <td>0</td>
                   <td>0</td>
                   <td>
                           
                            <a href="" class="btn btn-warning btn-sm">Editar</a>
                            <a data-toggle="modal" data-target="" class="btn btn-danger btn-sm" href="">Eliminar</a>
                            
                   </td>
                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
