<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public $table = 'venta';
    public $timestamps = false;
    
    protected $fillable =
	[
		'id_auto',
        'id_cliente',
        'id_empleado',
        'Fecha'
	];
}
