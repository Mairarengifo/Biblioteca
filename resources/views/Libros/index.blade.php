
@extends('layout')

@section('contenido')

@if (session('status'))
  <div class="alert alert-success">{{ session('status')}}</div>
  @endif

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Autor</th>
      <th scope="col">Gènero</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($libros as $libro)
    
    <tr>
    <td>{{$libro->id}}</td>
     <td>{{$libro->nombre}}</td>
      <td>{{$libro->autor}}</td>
       <td>{{$libro->genero}}</td>
       <td>
            <a href="{{ route('libros.show',$libro->id) }}" class="btn btn-primary">Ver</a>
            <a href="{{ route('libros.edit',$libro->id) }}" class="btn btn-success">Editar</a>
            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar libro</button>
            </form>
        </td>
     </tr>
     @endforeach
  </tbody>
</table>

@endsection




