<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = "galeria";
    public $timestamps = false;
    protected $fillable = [
        'image','title','desc','visible','id'
    ];
    protected $hidden = [];
}
