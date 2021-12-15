<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
	public $table = 'auto';
    public $timestamps = false;

    protected $fillable =
	[
		'Marca',
		'Modelo',
        'Traccion',
        'Precio',
		'Telefono'
	];
    
    public function ventas()
	{
		return $this->hasMany(Venta::class, 'id_auto');
	}

	public function delete()
	{
		$this->ventas()->delete();
		return parent::delete();
	}
}
