@extends('layouts.tema')
@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="tile">
   
       <form action="{{ route('alumno.store') }}" method = "POST">
         {{ csrf_field() }} 
               <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" class="form-control"  type="text" placeholder="Escriba el Nombre de la Materia">
               </div>
         
          <div class="form-group">
                    <label for="codigo">Código</label>
                    <input  name="codigo" class="form-control"  type="text" placeholder="Seccion">
               </div>
         
          <div class="form-group">
                    <label for="materia">Materia</label>
                    <input name="materia" class="form-control"  type="text" placeholder="CRN">
               </div>
         
          
         
         <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Enviar alv</button>
         </div>
         
          
      </form>  
     </div>
    </div>
   </div>

@endsection