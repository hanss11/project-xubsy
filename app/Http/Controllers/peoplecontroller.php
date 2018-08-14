<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class peoplecontroller extends Controller
{


  public function busca()
    {
      $search = \Request::get('search');
      $usuarios = User::where('name', 'like', '%'.$search.'%')
        ->orderBy('name')
        ->paginate(5);
      $usuarios->appends(['search' => $search]);
      /*
        $usuarios = User::Search()->orderBy('name')->paginate(5);
      */
      return view('search', compact('usuarios'));
    }


  public function peoples(request $request)
    {
      $users = User::paginate(5);

      $view = view('peoples');
      $view->with('users',$users);

      return $view;
    }
}
