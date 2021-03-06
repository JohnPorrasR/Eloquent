<?php

namespace EloquentORM;

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
        'name', 'email', 'password','gender','biography',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function books(){
        return $this->belongsToMany(Book::class);
    }

}
