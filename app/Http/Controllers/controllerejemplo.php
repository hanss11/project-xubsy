<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerejemplo extends Controller
{
  public function controllerejemplo(Request $request) {
    return view('llegaste al ejemplo controller');
  }
}
