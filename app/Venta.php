<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = "ventas";
    public $timestamps = false;
    protected $fillable = [
        'id','idProducto', 'fecha', 'contador'
    ];
    protected $hidden = [];
}
