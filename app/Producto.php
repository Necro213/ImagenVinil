<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    public $timestamps = false;
    protected $fillable = [
        'id','nombre','desc','image'
    ];
    protected $hidden = [];
}
