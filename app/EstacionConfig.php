<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionConfig extends Model
{
    protected $table = "estacion_config";
    public $timestamps = false;
    protected $fillable = [
        'id','image','estacion','dia','mes','diaf','mesf'
    ];
    protected $hidden = [];
}
