@extends('layouts.app')
@section('content')
<form action="/materia/update/{{$id}}" method="POST">
  <label for="matteria">Materia:</label>
  <input type="text" name="materia" value="{{$id}}">
  <input type="submit" value="Guardar">

  
</form>
@endsection