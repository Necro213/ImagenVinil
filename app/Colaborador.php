<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = "colaboradores";
    public $timestamps = false;
    protected $fillable = [
        'image','nombre','id','sitio'
    ];
    protected $hidden = [];
}
