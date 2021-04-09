
@extends('layout')

@section('contenido')

<h1>Crear nuevo registro</h1>

<form action="{{ route('libros.update', $libro->id) }}" method="POST">
@csrf
@method('PUT');

    <div class="form-group">
        <label for="">Nombre del Libro</label>
        <input type="text" class="form-control" name="nombre" value="{{ $libro->nombre}}">
    </div>

<div class="form-group">
    <label for="">Autor</label>
    <input type="text" class="form-control" name="autor" value="{{ $libro->autor}}">>
</div>

<div class="form-group">
    <label for="">Gènero</label>
    <input type="text" class="form-control" name="genero" value="{{ $libro->genero}}">>
</div>

<div class="form-group">
    <label for="">Editorial</label>
    <input type="text" class="form-control" name="editoria" value="{{ $libro->editoria}}">>
</div>

<div class="form-group">
    <label for="">Descripcion</label>
    <textarea class="form-control" name="descripcion">{{ $libro->descripcion}}</textarea>
</div>

<button type="submt" class="btn btn-primary">Editar libro</button>


</form>
    
@endsection