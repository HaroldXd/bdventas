<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabeceraVenta extends Model
{
    use HasFactory;
    protected $table = 'cabeceraventas';
    protected $primaryKey = 'venta_id';
    public $timestamps = false;

    protected $fillable = [
        'cliente_id', 'tipo_id','fecha_venta','nrodoc','total','igv','subtotal','estado'
    ];    
    public function clientes()
    {
        return $this->hasOne(Cliente::class,'cliente_id','cliente_id');
    }

    public function tipo()
    {
        return $this->hasOne(Tipo::class,'tipo_id','tipo_id');
    }
    public function productos()
    {
        return $this->hasOne(Productos1::class,'idproducto','idproducto');
    }
}
