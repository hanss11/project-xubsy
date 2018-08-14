<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
  protected $table = 'posteos';
  protected $guarded = array();

  public function user(){
      return $this->belongsTo(User::class);
  }

}
