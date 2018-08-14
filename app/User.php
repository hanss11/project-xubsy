<?php

namespace App;

use App\Models\Posteo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','tipoDeUsuario','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function posts(){
            return $this->hasMany(Posteo::class);
      }

    public function followers()
      {
          return $this->belongsToMany(User::class, 'followers', 'leader_id', 'follower_id')->withTimestamps();
      }
      
    public function followings()
      {
          return $this->belongsToMany(User::class, 'followers', 'follower_id', 'leader_id')->withTimestamps();
      }
}
