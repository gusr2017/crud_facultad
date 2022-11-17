@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar</h5>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro?? 

                <table class="table table-sm table-hover">
                    <thead>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $personas->paterno }}</td>
                            <td>{{ $personas->materno }}</td>
                            <td>{{ $personas->nombre }}</td>
                            <td>{{ $personas->fecha_nacimiento }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa-solid fa-user-minus"></i>Eliminar</button>
                    <a href="{{ route('personas.index') }}" class="btn btn-info"><span class="fa-sharp fa-solid fa-rotate-left"></span>Regresar</a>
                </form>
            </div>
        </p>
    </div>
</div>
@endsection