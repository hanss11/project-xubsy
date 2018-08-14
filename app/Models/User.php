<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table = 'users';

  public function scopeSearch($q)
    {
      return empty(request()->search) ? $q : $q->where('name', 'like', '%'.request()->search.'%');
    }

}
