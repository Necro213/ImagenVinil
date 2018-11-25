<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GnrlConfig extends Model
{
    protected $table = "configGnrl";
    public $timestamps = false;
    protected $fillable = [
        'id','mision','vision','telefono','direccion','email','facebook','twitter','eslogan','quienessomos'
    ];
    protected $hidden = [];
}