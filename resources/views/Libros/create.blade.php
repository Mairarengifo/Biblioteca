
@extends('layout')

@section('contenido')

<h1>Crear nuevo registro</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
        </ul>
    </div>
    @endif

<form action="{{ route('libros.store') }}" method="POST">
@csrf

    <div class="form-group">
        <label for="">Nombre del Libro</label>
        <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
    </div>

<div class="form-group">
    <label for="">Autor</label>
    <input type="text" class="form-control" name="autor" value="{{ old('autor') }}">
</div>

<div class="form-group">
    <label for="">Gènero</label>
    <input type="text" class="form-control" name="genero" value="{{ old('genero') }}">
</div>

<div class="form-group">
    <label for="">Editorial</label>
    <input type="text" class="form-control" name="editoria" value="{{ old('editoria') }}">
</div>

<div class="form-group">
    <label for="">Descripcion</label>
    <textarea class="form-control" name="descripcion" value="{{ old('descripcion') }}"></textarea>
</div>

<button type="submt" class="btn btn-primary">Registra nuevo libro</button>


</form>
    
@endsection
