<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Posteo;
use Illuminate\Http\Request;

class profilecontroller extends Controller
{
  public function prof(Request $request) {
    //$posts = User::find($user_id)->posts;
    $posts = posteo::all()->sortByDesc('created_at');

    $view = view('profile');
    $view->with('posteos',$posts);

    return $view;
  }
  public function verperfil($id){
    $userz = user::find($id);
    //$post = User::find($id)->posts;
    //$post = User::with('posts')->get();
    $posts = User::find($id)->posts;



    $view = view('perfil');
    $view->with('posteos',$posts);
    $view->with('users',$userz);


    return $view;
  }
}
