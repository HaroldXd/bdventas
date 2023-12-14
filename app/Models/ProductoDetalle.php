<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoDetalle extends Model
{
    use HasFactory;
    protected $table = 'detalle_producto';
    protected $primaryKey = 'id_detalle';
    public $timestamps=false;
    protected $fillable=['idproducto','llantas','garantia','detalle','idcolores','idgaleria','estado'];
    public function productos(){
        return $this->hasOne(Productos::class, 'idproducto', 'idproducto') ;
    }
    public function galeria()
{
    return $this->hasMany(Galeria::class, 'idgaleria', 'id');
}
}
