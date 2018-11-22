<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gama extends Model
{
    protected $table = "gama";
    public $timestamps = false;
    protected $fillable = [
        'image','nombre','tipo','id'
    ];
    protected $hidden = [];
}
