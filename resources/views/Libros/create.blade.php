
@extends('layout')

@section('contenido')

<h1>Crear nuevo registro</h1>

<form action="{{ route('libros.store') }}" method="POST">
@csrf

    <div class="form-group">
        <label for="">Nombre del Libro</label>
        <input type="text" class="form-control" name="nombre">
    </div>

<div class="form-group">
    <label for="">Autor</label>
    <input type="text" class="form-control" name="autor">
</div>

<div class="form-group">
    <label for="">Gènero</label>
    <input type="text" class="form-control" name="genero">
</div>

<div class="form-group">
    <label for="">Editorial</label>
    <input type="text" class="form-control" name="editoria">
</div>

<div class="form-group">
    <label for="">Descripcion</label>
    <textarea class="form-control" name="descripcion"></textarea>
</div>

<button type="submt" class="btn btn-primary">Registra nuevo libro</button>


</form>
    
@endsection
