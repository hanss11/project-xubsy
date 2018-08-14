<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publications;

class addpublication extends Controller
{
  public function pub(Request $request) {
    $publications = publications::all();
    //dd($peliculas);
    $view = view('addpublication');
    $view->with('mensaje', 'estas son las pelicuias')
         ->with('posteos',$publications);

    return $view;
  }


public function save(Request $request) {
   //dd($request);
}


public function validar(Request $request) {

$this->validate($request, ['titulo' => 'required',
 'descripcion' => 'required'],
['titulo.required' => 'el nombre de la pelicula es obligatorio']);

}




}
