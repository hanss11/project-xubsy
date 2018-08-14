<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dbusercontroller extends Controller
{
  public function listar(Request $request) {
    $users = User::all();
    //dd($peliculas);
    $view = view('dbuser');
    $view->with('mensaje', 'estos son los usuarios')
         ->with('users',$users);

    return $view;
  }
}



//validacion datos//

public function crear(Request $request) {

$this->validate($request, ['title' => 'required',
 'rating' => 'required|numeric',
 'awards' => 'required|interg',
 'release_date' => 'required'],
['title.required' => 'el nombre de la pelicula es obligatorio',
 'rating.required' => 'el rating es obligatorio',
 'rating.numeric' => 'el rating es un campo numerico']);

}

//primer manera - mandar a base de datos//

$peli = new Pelicula($request->except(['_token']));

$peli->save();

//datos guardados exitosamente//

return redirect('/peliculas/add') //redirije para no tener que volver a cargar datos//
->with('exito', 'la pelicula a sido guardada con exito!')


//segunda manera//
Peliculla::create(($request->except('_token'))


//tercer manera - Hacer update o create //

$peli = Pelicula::where('title', '=', $request->input('title'))
   //first devuelve una instancia de la clase pelicula
  ->first();


if($peli) {
   $peli->fill($request->except(['_token, title']));
} else {
$peli = new Pelicula($request->except(['_token']));

}

$peli->save();
*/
