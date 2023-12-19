<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table = 'sucursales';
    protected $primaryKey = 'idsucursal';
    public $timestamps = false;

    protected $fillable = [
        'descripcion', 'direccion','idprovincia','iddistrito','idservicio','idhorario','ubicacion','estado'
    ];    
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'idprovincia');
    }
    
    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'iddistrito');
    }
}
