@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{ route("personas.update", $personas->id) }}" method="POST">
            @csrf
            @method("PUT")
            <label for="">Apellido Paterno</label>
            <input type="text" name="paterno" class="form-control" required value="{{ $personas->paterno }}">
            <label for="">Apellido Materno</label>
            <input type="text" name="materno" class="form-control" required value="{{ $personas->materno }}">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{ $personas->nombre }}">
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $personas->fecha_nacimiento }}">
            <br>
            <button class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>Actualizar</button>
            <a href="{{ route('personas.index') }}" class="btn btn-info"><i class="fa-sharp fa-solid fa-rotate-left"></i>Volver</a>
        </form>
      </p>
    </div>
</div>
@endsection