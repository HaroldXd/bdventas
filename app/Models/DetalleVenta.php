<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $table = 'detalleventas';    
    public $timestamps = false;

    protected $fillable = [
       'idproducto','venta_id','precio', 'cantidad',
    ];    

    public function ventas()
    {
        return $this->hasOne(CabeceraVenta::class,'venta_id','venta_id');
    }
    public function productos()
    {
        return $this->hasMany(ProductoDetalle::class,'idproducto','idproducto');
    }
    
}
