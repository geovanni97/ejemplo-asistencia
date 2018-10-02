@extends('layouts.tema')
@section('contenido')
    <h1>
      Listado alumnos
</h1>
<div class="row">
  <div class="col-md-12">
      <div class="table">

    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>CRN</th>
        <th>Codigo</th>
        <th>Materia</th>

      </tr>
    </thead>
    <tbody>
      @foreach($materias as $mat)
      <tr>
        <td>{{ $mat->id}}</td>
        <td>{{ $mat->codigo}}</td>
        <td>{{ $mat->nombre}}</td>
        <td>{{ $mat->materia}}</td>
        

      </tr>
      @endforeach
    </tbody>
  </div>
     </div>
@endsection