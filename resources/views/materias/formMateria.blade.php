@extends('layouts.tema')
@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="tile">
   
       <form action="{{ route('materia.store') }}" method = "POST">
         {{ csrf_field() }} 
               <div class="form-group">
                    <label for="materia">Materia</label>
                    <input name="materia" class="form-control"  type="text" placeholder="Escriba el Nombre de la Materia">
                    <small class="form-text text-muted" id="emailHelp">Los alumnos se podrán inscribir a su materia</small>
               </div>
         
          <div class="form-group">
                    <label for="seccion">Sección</label>
                    <input  name="seccion" class="form-control"  type="text" placeholder="Seccion">
                    <small class="form-text text-muted" id="emailHelp">Los alumnos se podrán inscribir a su materia</small>
               </div>
         
          <div class="form-group">
                    <label for="crn">CRN</label>
                    <input name="crn" class="form-control"  type="text" placeholder="CRN">
                    <small class="form-text text-muted" id="emailHelp">Los alumnos se podrán inscribir a su materia</small>
               </div>
         
          <div class="form-group">
                    <label for="salon">Salon</label>
                    <input name="salon" class="form-control"  type="text" placeholder="Escriba el Nombre de la Materia">
                    <small class="form-text text-muted" id="emailHelp">Los alumnos se podrán inscribir a su materia</small>
               </div>
         
         <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Enviar alv</button>
         </div>
         
          
      </form>  
     </div>
    </div>
   </div>

@endsection