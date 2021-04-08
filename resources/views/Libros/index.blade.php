
@extends('layout')

@section('contenido')

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
        </td>
     </tr>
     @endforeach
  </tbody>
</table>

@endsection




