@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar Nuevo</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{ route('personas.store') }}" method="POST">
            @csrf
            <label for="">Apellido Paterno</label>
            <input type="text" name="paterno" class="form-control" required>
            <label for="">Apellido Materno</label>
            <input type="text" name="materno" class="form-control" required>
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <br>
            <button class="btn btn-primary"><span class="fa-solid fa-user-plus"></span>Agregar</button>
            <a href="{{ route('personas.index') }}" class="btn btn-info"><i class="fa-sharp fa-solid fa-rotate-left"></i>Volver</a>
        </form>
      </p>
    </div>
</div>
@endsection