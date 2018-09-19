@extends('layouts.app')
@section('content')
<form action="/materia/store" method="POST">
  <label for="matteria">Materia:</label>
  <input type="text" name="materia">
  <input type="submit" value="Guardar">
</form>
@endsection