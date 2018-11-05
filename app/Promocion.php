<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table = "promociones";
    public $timestamps = false;
    protected $fillable = [
        'id','title','desc','desde', 'hasta', 'image'
    ];
    protected $hidden = [];
}
