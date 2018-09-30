<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',function(){
  return view('inicio');
 
});
Route::resource('materia', 'MateriaController');

/* 
Route::get('/materia/create',function(){
  return view('materias.formMateria');
  
});

Route::post('/materia/store',function(){
  return view('materias.storeMateria');
  //validacion
  //$materia=$_POST['materia'];
  //inserta a base de datos
  //redireccionar
  
});
Route::get('/materia/show/{id}',function($id){
//Buscar materia con el id que estas recibiendo
  return view('materias.showMateria',compact('id'));//compact pasa la variable a la vista
  
});

*/

//Route::get('/home', 'HomeController@index')->name('home');
  /*
Route::get('/materias/listado', 'MateriaController@listado');
Route::get('/materias/create', 'MateriaController@create');
Route::post('/materias/store', 'MateriaController@store');
Route::get('/materias/show/{materia}', 'MateriaController@show');
Route::get('/materias/edit/{id}', 'MateriaController@edit');
Route::get('/materias/update/{id}', 'MateriaController@update');
Route::post('/materias/reportePDF', 'MateriaController@reportePDF');
*/

        /*


Route::get('/alumnos', 'ControladorA@index');

Route::get('/dependencias', 'ControladorDependencia@index');

Route::get('/empleados', 'ControladorEmpleados@index');

Route::get('/roles', 'ControladorRoles@index');
   

Route::get('/materia/edit/{id}',function($id){
  //Consultar materia con id
  return view('materias.formEditMateria', compact('id'));
  
});

Route::post('/materia/update/{id}',function($id){
  //return view('materias.storeMateria');
  //validacion
  //$materia=$_POST['materia'];
  //Actualizar base de datos
  //redireccionar /materia/show/$id
  
});

Primera opcion para rutas (no se recomienda su uso)
Route::get('/materias', function () {
  return 'Ruta: materias';
}); */
