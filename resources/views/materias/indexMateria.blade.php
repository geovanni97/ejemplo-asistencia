@extends('layouts.tema')
@section('contenido')
    <h1>
      Listado materia
</h1>
<div class="row">
  <div class="col-md-12">
      <div class="table">

    <thead>
      <tr>
        <th>ID</th>
        <th>Materias</th>
        <th>CRN</th>
        <th>Salon</th>
        <th>Horario</th>
        <th>Calendario</th>

      </tr>
    </thead>
    <tbody>
      @foreach($materias as $mat)
      <tr>
        <td>{{ $mat->id}}</td>
        <td>{{ $mat->nombre_materia}}</td>
        <td>{{ $mat->crn}}</td>
        <td>{{ $mat->salon}}</td>
        <td>{{ $mat->horario}}</td>
        <td>{{ $mat->calendario}}</td>

      </tr>
      @endforeach
    </tbody>
  </div>
     </div>
@endsection