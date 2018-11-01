<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    public $timestamps = false;
    protected $fillable = [
        'nombre', 'apellidos', 'username', 'password','apikey'
    ];
    protected $hidden = ['id'];

}
