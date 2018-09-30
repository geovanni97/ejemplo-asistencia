<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function reportePDF(){
    //sql query
    //use pdf lib
    //return pdf_file
  }
    public function index()
    {
      $materias = Materia::all();
        return view('materias.indexMateria', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('materias.formMateria');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $materia = new Materia();
     $materia->materia = $request->input('materia');
     $materia->seccion = $request->input('seccion');
     $materia->crn = $request->crn; //Es otra opcion dinamicamente poniendole el nombre de nuestro campo
     $materia->salon = $request->salon;
     $materia->save();
     return redirect()->route('materia.index');

      dd($materia);
            //dd($request->all); Ver qie esta recibiendo los datos

      //$materia = $request->materia;
  //validacion
  //$materia=$_POST['materia'];
  //inserta a base de datos
  //redireccionar
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show( $materia)
    {
       //Buscar materia con el id que estas recibiendo
  return view('materias.showMateria',compact('materia'));//compact pasa la variable a la vista
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //Consultar materia con id
  return view('materias.formEditMateria', compact('id'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $id)
    {
        //return view('materias.storeMateria');
  //validacion
  //$materia=$_POST['materia'];
  //Actualizar base de datos
  //redireccionar /materia/show/$id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
