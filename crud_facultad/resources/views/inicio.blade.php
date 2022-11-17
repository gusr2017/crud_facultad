@extends('layout/plantilla')

@section('tituloPagina', 'CRUD Mio')

@section('contenido') 
    <div class="card">
        <div class="card-header">CRUD</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                  @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                      {{ $mensaje }}
                    </div>
                  @endif
                </div>
              </div>
        
            <h5 class="card-title">Listado de Personas</h5>
            <p><a href="{{ route("personas.create") }}" class="btn btn-primary"><span class="fa-solid fa-user-plus"></span>Agregar Persona</a></p>
            <hr>
            <p class="card-text">
                <div class="table table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <td>Apellido Paterno</td>
                            <td>Apellido Materno</td>
                            <td>Nombre</td>
                            <td>Fecha de Nacimiento</td>
                            <td>Editar</td>
                            <td>Eliminar</td>
                        </thead>
                        @foreach ($datos as $item)
                            
                        <tbody>
                            <td>{{ $item->paterno }}</td>
                            <td>{{ $item->materno }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->fecha_nacimiento }}</td>
                            <td>
                                <form action="{{ route('personas.edit', $item->id) }}" method="GET">
                                    <button class="btn btn-sm btn-warning">
                                        <span class="fa-solid fa-user-pen"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('personas.show', $item->id) }}">
                                    <button class="btn btn-sm btn-danger">
                                        <span class="fa-solid fa-user-minus"></span>
                                    </button>
                                </form>
                            </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </p>
            
        </div>
    </div>

@endsection