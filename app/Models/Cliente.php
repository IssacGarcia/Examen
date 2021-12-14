<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
	public $table = 'cliente';
    public $timestamps = false;
	
    protected $fillable =
	[
		'Nombre',
		'Apellido',
        'Calle',
        'Colonia',
        'Presupuesto',
        'telefono'
	];

    public function ventas()
	{
		return $this->hasMany(Venta::class, 'id_cliente');
	}

	public function delete()
	{
		$this->ventas()->delete();
		return parent::delete();
	}
}
