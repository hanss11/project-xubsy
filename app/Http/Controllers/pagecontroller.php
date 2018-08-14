<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class pagecontroller extends Controller
{
    public function pag(request $request) {
      $users = User::all(); $users = User::paginate(5);
      $view = view('paginar');
      $view->with('mensaje', 'estos son los usuarios')
           ->with('users',$users);

      return $view;

    }
}
