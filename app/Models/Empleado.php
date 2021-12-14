<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
	public $table = 'empleado';
    public $timestamps = false;
	
    protected $fillable =
	[
        'Nombre',
        'Apellido',
        'Puesto',
        'Sueldo',
        'telefono',
	];

    public function ventas()
	{
		return $this->hasMany(Venta::class, 'id_empleado');
	}

	public function delete()
	{
		$this->ventas()->delete();
		return parent::delete();
	}
}
